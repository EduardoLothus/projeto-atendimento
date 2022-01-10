<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styleformulario.css?') . date('dmYHis') }}" />
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="app.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
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

    <div class="header">

        <h2>AGENDAMENTO</h2>

    </div>


    <!---------------------------------------- FIM --------------------------------------------->

    <!------------------------------------- MENU FORM ---------------------------------------->
    <!---------------------------------------------------------------------------------------->
    <!--------------------------------↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓↓---------------------------------->


<form action="/cadastrar-formulario" method="POST">
    <div class="container-menu">
        <div class="ins-aviso">
            <h3>INFORMAÇÕES PARA AGENDAMENTO</h3>
        </div>

        <div class="base">

        

        @csrf
            <div class="info">
            <label for="selecionar-local">Escolha o local de atendimento</label>
     <select class="form-control select2" style="width: 200px; padding: 4px 4px; font-size:13px;"  name="local_atendimento" id="input-local" required>
         <option value="3620194" selected="selected">[Selecione]</option>
         <option value="Lorem Ipsum" >Lorem Ipsum</option>
         <option value="volutpat risus nec" >volutpat risus nec</option>
         <option value="Admodum accumsan" >Admodum accumsan</option>
     </select> 

     <label for="selecionar-atendimento">Escolha o tipo do agendamento</label>
    <select class="form-control select2" style="width: 200px; padding: 4px 4px; font-size:13px;" name="tipo_agendamento" id="input-agendamento" required>
         <option value="3620194" selected="selected">[Selecione]</option>
         <option value="Lorem Ipsum" >Lorem Ipsum</option>
         <option value="quisso pudia" >quisso pudia</option>
         <option value="vulputate dapibus" > vulputate dapibus</option>
     </select> 


                <div class="base-info">

                    <div class="email">


                        <label for="NomeUsuario">Email para contato (<b style="color:red;">*</b>)</label>
                        <input id="EmailUsuario" name="email" required type="email" placeholder="Informe o Email para contato">

                    </div>

                    <div class="telefone">

                        <label for="senhaUsuario">Telefone para contato (<b style="color:red;">*</b>)</label>
                        <input id="tel" name="telefone" required type="number" placeholder="Informe o Telefone para contato" >

                    </div>

                </div>

              <div class="base-info">
                <div class="cpf-rep">

                    <label for="CPFUsuario">CPF do Representante (<b style="color:red;">*</b>)</label>
                    <input id="cpf" required type="number" name="cpf_representante" placeholder="Informe o CPF" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" >

                </div>
                
                <div class="nome-rep">

                    <label for="NomeUsuario">Nome do Representante (<b style="color:red;">*</b>)</label>
                    <input id="NomeUsuario" required type="Name" name="nome_representante" placeholder="Informe o nome do representante">

                </div>
              </div>
                
                
                
                
                
            <div class="base-info">
                <div class="cnpj-cont">

                    <label for="cnpj-contribuinte">CPF/CNPJ do Contribuinte (<b style="color:red;">*</b>)</label>
                    <input id="info-contribuinte" name="cnpj_contribuinte" required type="number" placeholder="Informe o CPF/CNPJ" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" >

                </div>

                <div class="razao-soc">

                    <label for="razao-social">Nome/Razão Social (<b style="color:red;">*</b>)</label>
                    <input id="razao-social" name="nomerazao_social" required type="Name" placeholder="Informe o Nome/Razão Social do contribuinte">

                </div>

                

            </div>


            
            <label for="tipo-agendamento">Serviços</label>
            <select class="form-control select2" style="width: 280px; padding: 4px 4px; font-size:13px;" onchange="abrirCras()" name="bairro" id="input-serviço" required>
                <option value="3620194" selected="selected">[Selecione o tipo do agendamento]</option>
                <option value="Lorem Ipsum" >Lorem Ipsum</option>
                <option value="Manduma pindureta" >Manduma pindureta</option>
                <option value="Sed non ipsum" >Sed non ipsum</option>
            </select> 


         <div class="dia-horario">

         <div class="dia-column">
            <label for="data-disponivel">Dias disponíveis</label>
            <select class="form-control select2" style="width: 210px; padding: 4px 4px; font-size:13px;" onchange="abrirCras()" name="dia_disponivel" id="input-horarios" required>
         <option value="3620194" selected="selected">[Selecione uma data]</option>
         <option value="27" >27</option>
         <option value="28/10/2021" >28/10/2021</option>
         <option value="29/10/2021" >29/10/2021</option>
         <option value="30/10/2021" >30/10/2021</option>
         <option value="31/10/2021" >31/10/2021</option>
         <option value="01/11/2021" >01/11/2021</option>
         <option value="02/11/2021" >02/11/2021</option>
            </select> 

            </div>    
            

        <div class="horario-column">

            <label for="horario-disponivel" >Horários disponíveis</label> 

            <select class="form-control select2" style="width: 210px; padding: 4px 4px; font-size:13px;" onchange="abrirCras()" name="horario_disponivel" id="input-horarios" required>
         <option value="3620194" selected="selected">[Selecione um Horario]</option>
         <option value="09" >09</option>
         <option value="09:30" >09:30</option>
         <option value="10:00" >10:00</option>
         <option value="10:30" >10:30</option>
         <option value="11:00" >11:00</option>
         <option value="11:30" >11:30</option>
         <option value="12:00" >12:00</option>
         <option value="12:30" >12:30</option>
         <option value="13:00" >13:00</option>
         <option value="13:30" >13:30</option>
         <option value="14:00" >14:00</option>
         <option value="14:30" >14:30</option>
         <option value="15:00" >15:00</option>
         <option value="15:30" >15:30</option>
         <option value="16:00" >16:00</option>
            </select> 


            </div>   
        </div>  

       </div> 

    </div>   
    <div class="ins-aviso-bottom">
        
        <input class="submit-agendar" type="submit" value="Agendar" name="enviar-formulario" >
        
    </form>  
        
    <a href="itaborai.rj.gov.br">         
             <input class="submit-cancelar" type="submit" value="Cancelar">
     </div>     
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