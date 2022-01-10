<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/stylelogin.css?') . date('dmYHis') }}" />
    <title>Prefeitura Itaboraí</title>
</head>
<body>
   <!------------------------------------- MENU TOOLBAR ------------------------------------->
 <!---------------------------------------------------------------------------------------->
 <!--------------------------------↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓---------------------------------->
 
 <div class="container">
     <div class="toolbar">
       <div class="toolbar-container">
           <div class="brasao-prefeitura-toolbar">
               <a target="_blank" href="https://www.itaborai.rj.gov.br/">
               <img src="https://www.itaborai.rj.gov.br/wp-content/themes/template-prefeitura-2.0/toolbar/img/BRASÃO_PMI.svg" alt="brazão prefeitura">
               <span class="p-menu">PREFEITURA DE ITABORAÍ</span>
            </a>
        </div>
        
        <div class="toolbar-menu">
            <div>
                <a target="_blank" href="https://www.itaborai.rj.gov.br/estrutura/">
                    <img src="./img/ICON_ATENDIMENTO.svg" alt="">
                    <span class="p-menu">ATENDIMENTO</span>
                </a>
            </div>
            
            <div class="separador"></div>
            <div>
                <a target="_blank" href="https://transparencia.ib.itaborai.rj.gov.br/">
                <img class="lupa" src="./img/ICON_TRANSPARENCIA.svg" alt="">
                <span class="p-menu">PORTAL TRANSPARÊNCIA</span>
            </a>
        </div>
                <div class="separador"></div>
                <div>
                    <a target="_blank" href="https://coronavirus.itaborai.rj.gov.br/">
                    <img src="./img/ICON_COVID.svg" alt="">
                    <span class="p-menu">COVID-19</span>
                </a>
            </div>
            <div class="separador"></div>
            <div>
                <a target="_blank" href="https://contribuinte.itaborai.rj.gov.br/">
                <img src="./img/ICON_PORTALDOCONTRIBUINTE.svg" alt="">
                <span class="p-menu">PORTAL DO CONTRIBUINTE</span>
            </a>
        </div>
        
    </div>
</div>
</div>

</div>

<!---------------------------------------- FIM --------------------------------------------->


 <div class="container-menu">
     <div class="box-login">
         <img src="./img/ICON_LOGIN_ATENDENTE.png" alt="" class="logo-atendente">
         <div class="logar">
        <p class="login-box-msg">Faça o login para iniciar</p>
        <form action="/usuario-logado" method="POST">
        @csrf

        <input type="email" class="form-control" name="email" placeholder="Email">

        <input type="password" class="form-control" name="senha" placeholder="Senha">

        <button class="button-acessar" type="submit">Acessar</button>

        @if(session()->has('message-erro'))

{{ session()->get('message-erro') }}

@endif

        </form>
        </div> 
      </div>

 </div>


<!-------------------------------------- FOOTER ------------------------------------------>
<!---------------------------------------------------------------------------------------->
<!--------------------------------↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓---------------------------------->

 <footer class="footer">
        <div class="container-footer">
            <div class="brasao-prefeitura-footer">
                <img src="https://eitbi.ib.itaborai.rj.gov.br/img/brasao_pmi_branco.svg" alt="brasao-pmi">
                <span>
                    Prefeitura Municipal de Itaboraí<br>
                    Praça Marechal Floriano Peixoto, 97 - Centro, Itaboraí - RJ, 24800-165<br>
                    ©2021 - Desenvolvido por Secretaria Municipal de Fazenda e Tecnologia / SEMFAT<br>
                </span>
            </div>
        </div>
    </footer>

</body>
</html>