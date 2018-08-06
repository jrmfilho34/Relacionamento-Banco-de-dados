<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fotos extends Model
{
    protected $fillable =[
        'fotos_id',
        'local'
    ];

    public function produto()
    {
        return $this->belongsTo('App\produto');
    }
}
