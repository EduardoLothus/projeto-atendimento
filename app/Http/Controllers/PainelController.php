<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\FormularioController;

class PainelController extends Controller
{
    //

    private $formularioController;

    public function __construct(){
        $this->formularioController = new FormularioController();
    }

    public function IrPainel(){
        $listarTodosOsFormularios = $this->formularioController->listarTodosOsFormularios();
        return view('painel_agendamento', compact('listarTodosOsFormularios'));
    }

}
