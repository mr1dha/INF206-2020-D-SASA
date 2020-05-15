<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sayur extends Model
{
    protected $table = 'sayur';
    protected $guarded = ['id'];

    public function penjual(){
    	$this->belongsTo('App\Penjual');
    }
}
