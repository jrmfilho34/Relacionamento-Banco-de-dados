<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produto extends Model
{
    protected $fillable = [
        'categoria_id','titulo','descricao','quantidade','preco','custo','validade'
    ];

     public function fotos()
    {
        return $this->hasMany('App\fotos');
    }

    public function produtos()
    {
        return $this->belongsTo('App\categorias');
    }

    public function pedidos()
    {
        return $this->belongsTo('App\pedido');
    }

}
