<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class FormaPagoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Nombre de la tabla
        $tabla = "tblFormaPagos";

        Schema::disableForeignKeyConstraints();

        //Eliminar el contenido de la tabla antes de insertar los datos de prueba
        DB::table($tabla)->truncate();

        //Array con los datos
        //id, descripcion, created_at, updated_at, deleted_at
        $datos = [
            [null, 'EFECTIVO'],
            [null, 'CHEQUE'],
            [null, 'TARJETA DE CRÉDITO' ],
        ];

        //Insertar los datos
        foreach ($datos as $reg) {
            DB::table($tabla)->insert([
                'id' => $reg[0], //autonumérico con null
                'descripcion' => $reg[1],

                'created_at' => date("Y-m-d H:i:s"), //Fecha y hora de Inserción
                'updated_at' => null, //Fecha y hora de Actualización
                'deleted_at' => null, //fecha y hora de elimnación
            ]);
        }//foreach

        Schema::enableForeignKeyConstraints();
    }
}
