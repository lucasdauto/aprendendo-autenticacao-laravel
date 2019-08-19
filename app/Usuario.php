<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatatble;

class Usuario extends Authenticatatble
{
    use Notifiable;

    protected $fillable = [
      'nome',
      'login',
      'email',
      'senha'
    ];

    protected $hidden = [
        'senha'
    ];

}
