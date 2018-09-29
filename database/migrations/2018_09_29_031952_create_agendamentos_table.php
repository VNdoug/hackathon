<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgendamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendamentos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('paciente_id')->unsigned();
            $table->foreign('paciente_id')->references('id')->on('users');
            $table->integer('medico_id')->unsigned();
            $table->foreign('medico_id')->references('id')->on('users');

            $table->date('data_pre_agendamento')->nullable();
            $table->time('hora_pre_agendamento')->nullable();
            $table->date('data_retorno')->nullable();
            $table->time('hora_retorno')->nullable();

            $table->text('sintomas')->nullable();
            $table->text('receita')->nullable();
            $table->text('avaliacao_medica')->nullable();
            $table->text('observacoes')->nullable();

            $table->boolean('confirmada')->default(0);
            $table->boolean('concluida')->default(0);

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
        Schema::dropIfExists('agendamentos');
    }
}
