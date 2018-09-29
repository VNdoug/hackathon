<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

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


    /* Scopes */
    public function scopeComRelacionamentos($query) {
        return $query->with(['paciente', 'medico']);
    }

    public function scopeConfirmadas($query) {
        return $query->where('confirmada', 1)->where('concluida', 0);
    }

    public function scopeConcluidas($query) {
        return $query->where('concluida', 1);
    }

    public function scopePendentes($query) {
        return $query->where('confirmada', 0);
    }


    /* Relationships */
    public function paciente() {
        return $this->belongsTo(User::class, 'paciente_id');
    }

    public function medico() {
        return $this->belongsTo(User::class, 'medico_id');
    }


    /* Getters */
    public function getCorCalendarioAttribute() {
        if ($this->concluida) {
            return 'green';
        }
        
        if ($this->confirmada) {
            return 'blue';
        }
        
        return 'red';
    }

}
