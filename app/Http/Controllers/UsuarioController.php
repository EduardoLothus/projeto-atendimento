<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsuarioController extends Controller
{
    //

    public function ContarUsuarioDeEmailESenha($email, $senha){
    
        $value = DB::select('SELECT COUNT(id) AS quantidade FROM login_atendente WHERE email = "' . $email . '" AND senha = "' . $senha . ' " ');       
            return $value;
     }

    public function ListarUsuarioPeloEmail($email){

        $value = DB::select('SELECT id, email, senha FROM login_atendente WHERE email = "' . $email . '" ');
            return $value;

    }
     

}
