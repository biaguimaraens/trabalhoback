<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('sala');
            $table->string('endereco');
            $table->string('horario');
            $table->string('data');
            $table->integer('idPaciente')->unsigned()->nullable();
            $table->integer('idMedico')->unsigned()->nullable();;
            $table->timestamps();
        });
        Schema::table('consultas', function (Blueprint $table){
          $table->foreign('idPaciente')->references('id')->on('pacientes')->onDelete('set null');
          $table->foreign('idMedico')->references('id')->on('medicos')->onDelete('set null');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('consultas');
    }
}
