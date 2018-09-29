<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'paciente_id','medico_id','data_pre_agendamento','data_consulta','sintomas','receita','avaliacao_medica',
        'observacoes','confirmada','concluida'
    ];
}
