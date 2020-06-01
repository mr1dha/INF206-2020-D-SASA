<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sayur extends Model
{
    protected $table = 'sayur';
    protected $guarded = ['id'];

    public function penjual(){
    	return $this->belongsTo('App\Penjual', 'penjual_id');
    }

    public function transaksi(){
    	return $this->hasMany('App\Transaksi');	 
    }
}
