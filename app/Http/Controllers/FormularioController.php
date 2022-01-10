<?php

namespace App\Http\Controllers;

use App\Models\Formulario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormularioController extends Controller
{
    //

    public function __construct(){
    }

    public function IrAcessarFormulario(){

        return view('siteformulario');
    }

     

     public function cadastrarFormulario(Request $request){
    

   
            $formulario = new Formulario();
            $formulario->local_atendimento = $request->local_atendimento;
            $formulario->tipo_agendamento = $request->tipo_agendamento;
            $formulario->email = $request->email;
            $formulario->telefone = $request->telefone;
            $formulario->cpf_representante = $request->cpf_representante;
            $formulario->nome_representante = $request->nome_representante;
            $formulario->cpf_contribuinte = $request->cpf_contribuinte;
            $formulario->cnpj_contribuinte = $request->cnpj_contribuinte;
            $formulario->nomerazao_social = $request->nomerazao_social;
            $formulario->dia_disponivel = $request->dia_disponivel;
            $formulario->horario_disponivel = $request->horario_disponivel;
            $formulario->save();
            
            return redirect()->to('atendimento');

        } 
    
    /**
     *  Esta funcao retorna todos os agendamentos 
     *  @param 
     *  @return $list
     */
    public function listarTodosOsFormularios() : array
    {
        $list = DB::select('SELECT formulario.local_atendimento, formulario.tipo_agendamento, formulario.email, formulario.telefone, formulario.cpf_representante, formulario.nome_representante, formulario.cpf_contribuinte, formulario.cnpj_contribuinte, formulario.nomerazao_social, formulario.dia_disponivel, formulario.horario_disponivel FROM  formulario ');
        return $list;
    } 

}
