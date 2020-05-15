<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticable;
use Illuminate\Notifications\Notifiable;

class Penjual extends Authenticable
{
    use Notifiable;

    protected $guard = 'penjual';
    protected $table = 'penjual';
    protected $guarded = ['id'];
    protected $hidden = ['password'];

    public function sayur(){
    	// $this->hasMany()
    }
}
