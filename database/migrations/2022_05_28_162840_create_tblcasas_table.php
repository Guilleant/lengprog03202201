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
            $table->bigInteger('tblformapago_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('tblpersona_id')->references('id')->on('tblpersonas');
            $table->foreign('tblformapago_id')->references('id')->on('tblformapagos');
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
