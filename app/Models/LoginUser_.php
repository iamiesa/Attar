<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class LoginUser_ extends Model
{
    use HasFactory;

    protected $table = 'loginusers_';
    protected $primarykey = 'user_id';


    
}
