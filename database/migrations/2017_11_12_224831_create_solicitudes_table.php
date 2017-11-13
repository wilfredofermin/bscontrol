<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSolicitudesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('solicitudes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado')->default(1);
            $table->string('descripcion')->nullable();
            $table->string('sucursal');
            $table->string('ubicacion');
            $table->integer('tipo'); // 1 : ERROR | 2 : ASISTENCIA | 3 : PROBLEMA | 4 : SOLICITUD
            $table->integer('prioridad')->default(1); // 1 : NORMAL | 2 : BAJA | 3 : ALTA

            $table->timestamps();


            //CATEGORY
            $table->integer('category_id')->unsigned();
            $table->foreign('category_id')->references('id')->on('categories');
            //SUB_CATEGORY
            $table->integer('sub_category_id')->unsigned();
            $table->foreign('sub_category_id')->references('id')->on('sub_categories');
            //USER
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('solicitudes');
    }
}
