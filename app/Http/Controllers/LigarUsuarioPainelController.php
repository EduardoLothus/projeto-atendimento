<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class LigarUsuarioPainelController extends Controller
{
      //

      public function __construct(){
        $this->usuarioController = new UsuarioController;
    }

}