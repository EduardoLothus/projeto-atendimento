<?php

namespace App\Http\Controllers;


use App\Models\Login_Atendente;
use Illuminate\Http\Request;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class OperadorController extends Controller
{
    //

    public function __construct(){
        $this->usuarioController = new UsuarioController;
    }


    public function IrLogar(){

        return view('atendente_login');
    }
    
    /**
     * 
     */

    public function logarOperador(Request $request){

        $validarUsuario = $this->usuarioController->ContarUsuarioDeEmailESenha($request->email, $request->senha);
        try {
            
            if($validarUsuario[0]->quantidade == 0 ){
                
              throw new \Exception("Seu email ou senha estao incorretos.");
            }
            
            $dadosUsuario = $this->usuarioController->ListarUsuarioPeloEmail($request->email);
            $request->session()->put('usuario', $dadosUsuario);
            

          return redirect('painel_de_agendamentos');

      } catch (\Exception $e) {
          
          return redirect()->back()->with('message-erro', $e->getMessage());
      }


   }  
    
   public function getLogout(){
    Auth::logout();
    Session()->flush();
    return Redirect::to('/pagina-atendente');
}

}
