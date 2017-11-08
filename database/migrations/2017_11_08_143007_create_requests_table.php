<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('estado')->default(2);   // 1- APROBADO | 2- PENDIENTE | 3 - DECLINADO
        $table->string('description');
        $table->text('long_description')->nullable();
        $table->integer('prioriry')->default(2); // 1- ALTA | 2- NORMAL | 3 - BAJA
        $table->integer('type');
        $table->integer('user');
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
        Schema::dropIfExists('requests');
    }
}
