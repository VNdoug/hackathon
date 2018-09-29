<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendamento extends Model
{
    protected $fillable = [
        'paciente_id','medico_id','data_pre_agendamento','hora_pre_agendamento','data_retorno', 'hora_retorno',
        'sintomas','receita','avaliacao_medica', 'observacoes','confirmada','concluida'
    ];

    protected $dates = [
        'data_pre_agendamento',
        'data_retorno'
    ];

    public function paciente(){
        return $this->hasOne(User::class, 'id', 'paciente_id');
    }
}
