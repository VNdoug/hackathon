<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFkEspecializacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table){
            $table->integer('especializacao_id')->unsigned()->nullable()->after('id');
            $table->foreign('especializacao_id')->references('id')->on('especializacao_medicos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table){
           $table->dropForeign('users_especializacao_id_foreign');
           $table->dropColumn('especializacao_id');
        });
    }
}
