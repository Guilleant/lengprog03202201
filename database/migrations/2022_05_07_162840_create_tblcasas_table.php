<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblcasasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcasas', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tblpersona_id')->unsigned();
            $table->string('direccion');
            $table->string('barrio');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tblpersona_id')->references('id')->on('tblpersonas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tblcasas');
    }
}
