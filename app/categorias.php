<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorias extends Model
{
    protected $fillable =[
        'nome'
    ];

    public function produtos()
    {
        return $this->hasMany('App\produto');
    }
}
