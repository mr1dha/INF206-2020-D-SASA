<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    protected $table = 'transaksi';
    protected $guarded = ['id'];

   public function sayur(){
    	return $this->belongsTo('App\Sayur', 'sayur_id');
    }

    public function user(){
    	return $this->belongsTo('App\User', 'user_id');
    }
}
