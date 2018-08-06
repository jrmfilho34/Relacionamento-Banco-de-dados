<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desconto extends Model
{
    protected $fillable =[
        'nome',
        'desconto',
        'validade',
        'ativo'
    ];
}
