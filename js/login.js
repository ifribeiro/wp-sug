$(document).ready(function(){
    //ativado quando ocorre um clique no botão
    $("#loginPainel").click(function(e){
        e.preventDefault();
        var username = $("#username").val(); //input do username
        var senha = $("#senha").val(); //input da senha        
        loginPainel(username,senha); //chama a função de loginPainel
        return false;
    });

    /**
     * Tenta realizar o login no painel do administrador
     * @param {} username 
     * @param {*} senha 
     */
    function loginPainel(nomeusuario, nomesenha){
        $.ajax({
            //chama a função de loginPainel do controller Login            
            url: $("#baseUrl").val() + 'Login/loginPainel',
            method: "POST",
            delay: 800,
            dataType: "json",
            data: {
                username:nomeusuario,
                senha:nomesenha
            }, 
            success: function(data) {
                //redireciona para a página de gerenciaradocoes                
                window.location = $("#baseUrl").val()+'admin/gerenciaradocoes';
                
            },
           error: function() {
            console.log();
            swal({
                title: 'Erro!',
                text: 'Senha ou usuários incorretos',
                type: 'error',
                confirmButtonText: 'Ok'
              })
           }
        });
    }

});
