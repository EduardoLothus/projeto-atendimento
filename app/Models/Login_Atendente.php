<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login_Atendente extends Model
{
    
    protected $table = "login_atendente";
	protected $fillable = ['id','login','senha','email'];

    use HasFactory;
}
