<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class endereco extends Model
{
      protected $fillable =[
         'endereco_id',
         'entrega',
         'cidade',
         'bairro',
         'rua',
         'CEP',
         'Telefone',
         'visitor'
    
    ];
}
