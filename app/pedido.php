<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    protected $fillable =[
         'user_id',
         'produto_id',
         'quantidade'
    ];

    public function produto()
    {
        return $this->hasMany('App\produto');
    }

     public function user()
    {
        return $this->belongsTo('App\User');
    }
    
}
