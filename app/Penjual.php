<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjual extends Authenticable
{
    use Notifiable;

    protected $guard = 'penjual';

    protected $guarded = ['id'];

    protected $hidden = ['password'];
}
