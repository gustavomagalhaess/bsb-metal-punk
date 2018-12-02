<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiscographiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discographies', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->longText('description');
            $table->char('type', 2); // SG (Single), EP, AB (Album)
            $table->char('format', 2); //K7, LP, CD, DG (Digital)
            $table->year('released');
            $table->text('pic_url');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('discographies');
    }
}
