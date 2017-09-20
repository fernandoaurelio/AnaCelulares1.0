$(document).ready(function(){
    // Acao Completa para o botao Cadastrar
   
    // Abre Formulario
    $('#cliente').click(function(){
        $.ajax({
            url:'View/CadastroCliente.php',
            method:'post',
            success: function(data){
                $("#conteudo").html(data);
            }
        });
        return false;
    });
    //CadastraCliente
    $('#cadastrarcliente').click(function(){
        $.ajax({
            url:'Controller/CadastraCliente.php',
            method:'post',
            data:$("#formularioCliente").serialize(),
            success: function(data){
                $("#conteudo").html(data);
            }
        });
    });
    
    // Ação de Cadastro da Ordem de Serviço
    // Chama o Formulario
    $("#ordempesquisa").click(function(){
        $.ajax({
            url:'View/AbrirOrdem.php?nome=$nome',
            method:'get',
            data:$("#resultadopesquisa").serialize(),
            success: function(data){
                $("#conteudo").html(data);
            }
        });
    });
    // Ação que cadastra a Ordem
    $("#CadastrarOs").click(function(){
        $.ajax({
            url:'Controller/CadastraOrdem.php',
            method:'post',
            data:$("#formularioOrdem").serialize(),
            success:function(data){
                $("#conteudo").html(data);
            }
        });
    });
    
    // Ação de Pesquisa
    
    // Botão que chama o Formulario
    $("#pesquisa").click(function(){
        $.ajax({
            url:'View/PesquisaCliente.php',
            method:'post',
            success: function(data){
                $("#conteudo").html(data);
            }
        });
        return false;
    });
    // Ação de Consultado a DB e retornar a pesquisa 
    
    $("#iniciarpesquisa").click(function(){
        if($("#pesquisacampo").val() === ""){
            alert('insira');
        }else{
             $.ajax({
            url:'Controller/Pesquisa.php',
            method:'get',
            data:{pesquisacampo:$("#pesquisacampo").val()},
            success:function(data){
                $("#conteudo").html(data);
            }
        });
        return false;
        }
       
    });
    
    // Ação Funcionarios
    
    // Chama o Formulario
    
    $("#funcionario").click(function(){
        $.ajax({
            url:'View/CadastroFuncionario.php',
            method:'post',
            success: function(data){
                $("#conteudo").html(data);
            }
        });
        return false;
    });
    // Ação que Cadastra o Funcionario da DB
    // Chama o formulario
    $("#funcionario").click(function(){
        $.ajax({
            url:'View/CadastroFuncionario.php',
            method:'post',
            success:function(data){
                $("#conteudo").html(data);
            }
        });
        return false;
    });
    
    // Faz a Ação do Cadastro de Funcionario
    $("#CadastroFuncionario").click(function(){
        $.ajax({
            url:'Controller/CadastraFuncionario.php',
            method:'post',
            data:$("#FormFuncionario").serialize(),
            success: function(data){
                $("#conteudo").html(data);
            }
        });
    });
    
   // Ação para A Escala
   // Chama o Formulario
   $("#escalas").click(function(){
       $.ajax({
           url:'View/CadastroEscala.php',
           success:function(data){
               $("#conteudo").html(data);
           }
       });
       return false;
   });
   // Ação que Cadastra a Escala do Funcionario
   
   $("#CadastraEscala").click(function(){
       $.ajax({
           url:'Controller/CadastraEscala.php',
           method:'post',
           data:$("#CadastroEscala").serialize(),
           success:function(data){
               $("#conteudo").html(data);
           }
       });
   });
   // Ação que Cadastra o Orçamento a Ordem de Serviço
   $("#orcamento").click(function(){
       $.ajax({
           url:'Controller/AlterarDados.php',
           method:'post',
           data:$("#addorcamento").serialize(),
           success:function(data){
               $("#conteudo").html(data);
           }
       });
   });
   // Edita os Dados do Cliente
   $("#editadados").click(function(){
       $.ajax({
           url:'Controller/EditaDadosCliente.php?id=$id',
           method:'post',
           data:$("#dadoscliente").serialize(),
           success: function(data){
               $("#conteudo").html(data);
           }
       });
   });
   // Mostra Historico do Cliente
   $("#verdados").click(function(){
        $.ajax({
            url:'View/InfodoCliente.php?id=$id',
            method:'get',
            data:$("#resultadopesquisa").serialize(),
            success: function(data){
                $("#conteudo").html(data);
            }
        });
    });
   
   // Ações sem Refresh, serão atualizados automaticamente, assim que um novo
   //dado é inserido na tabela.
   
   // Mostra as ordens que estão aguardando Orçamento
   function MostraOrdens(){
       $.ajax({
       url:'Controller/MostraOrdem.php',
       success: function(data){
           $("#ordens").html(data);
       }
   });
   // Mostra a Escala do Colaborador 
   }
   function MostraEscala(){
       $.ajax({
           url:'Controller/MostraEscala.php',
           success: function(data){
               $("#escala").html(data);
           }
       });
   }
  
    
   // Assim que o documento estiver pronto carrega a função
   MostraOrdens();
   MostraEscala();
   
});


