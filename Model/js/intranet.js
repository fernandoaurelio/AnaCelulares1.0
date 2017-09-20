$(document).ready(function(){
   
    // Ação do Login Caso campos estejam vazios
    $('#fazerlogin').click(function(){
        var campovazio = false;
        if($('#login').val() === ""){
            alert('Campo Login Vazio');
            campovazio = true;
        }
        if($('#senha').val() === ""){
            alert('Campo Senha vazio');
            campovazio = true;
        }
        if(campovazio === true){
           return false;
       }
       
    });
    
    // ---------Ação do MENU-----------
    
    // Botao Abre Formulario de Cadastro de Cliente
    
    
   
});