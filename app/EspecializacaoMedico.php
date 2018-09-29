<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EspecializacaoMedico extends Model
{
    protected $fillable = ['descricao', 'ativo'];

    public function scopeAtivo($query){
        return $query->where('ativo', true);
    }
}
