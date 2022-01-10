<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/stylepainel.css?') . date('dmYHis') }}" />
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
                <a href="/logout">
                    <img src="https://cdn-icons-png.flaticon.com/512/126/126467.png" alt="">
                    <span class="p-menu">Logout</span>
                </a>
            </div>
            
            
        
    </div>
</div>
</div>

</div>

 
 <div class="container-1">
   <div class="toolbar-1">
     <img src="https://cdn-icons-png.flaticon.com/512/1565/1565692.png" alt="">
     <p>
     Plantão Fiscal</p>
   </div>
</div>

<!---------------------------------------- FIM --------------------------------------------->
<div class="container-middle">
    <div class="painel">
        
        <div class="name-painel">
            <div class="info">
                <p>Painel de Controle</p>
                
            <input type="text" id="txtBusca" placeholder="Pesquisar Nome/CPF"/>
            <button id="btnBusca">
                <img src="./img/search-logo.png" alt="">
            </button>
            
        </div>       
    </div>
    
    <table class="styled-table">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Telefone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($listarTodosOsFormularios as $list)
            <tr id="info-1" class="op-hover">
                <td>{{ $list->nome_representante }}</td>
                <td>{{ $list->cpf_representante }}</td>
                <td>{{ $list->email }}</td>
                <td>{{ $list->telefone }}</td>
            </tr>   
            @endforeach
        
        <!-- and so on... -->
    </tbody>
</table>


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

      <div id="modal-promocao" class="modal-container">
		<div class="modal">
			<button class="fechar">x</button>
            @foreach($listarTodosOsFormularios as $list)
            <div class="column-info-1">
                <h3 class="subtitulo"> {{ $list->nome_representante }}</h3>
                <p><b>Email:</b> {{ $list->email }}</p>
                <p><b>Telefone:</b> {{ $list->telefone }}</p>
                <p><b>CPF Rep:</b> {{ $list->cpf_representante }}</p>
                <p><b>Nome Rep:</b> {{ $list->nome_representante }}</p>
                <p><b>CPF/CNPJ Cont:</b> {{ $list->cnpj_contribuinte }}</p>
                <p><b>Nome/Razão Social:</b> {{ $list->nomerazao_social }}</p>
                <p><b>Tipo de serviço:</b> {{ $list->tipo_agendamento }}</p>
                <p><b>Dia Agendado:</b> {{ $list->dia_disponivel }}</p>
                <p><b>Horario:</b> {{ $list->horario_disponivel }}</p>
		</div>
        @endforeach
	</div>



    <script src="{{asset('js/painelAgendamento.js?') . date('dmYHis') }}" ></script>


</body>
</html>