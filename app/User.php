<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'especializacao_id', 'crm', 'ativo', 'telefone', 'cart_sus', 'cpf'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function especializacao() {
        return $this->hasOne(EspecializacaoMedico::class,'id', 'especializacao_id');
    }

    public function consultas() {
        return $this->hasMany(Agendamento::class, 'medico_id');
    }


    /* Scopes */
    public function scopeMedicos($query) {
        return $query->role('medico');
    }


    /* Getters */
    public function getConsultasConfirmadasAttribute() {
        return $this->consultas()->confirmadas()->count();
    }
 }
