$(document).ready(function(){
    setAtivo();
    salvaAtualAtivo();   
    
    /**
     * Salva o navbar ativo para quando 
     * o link clicado for uma pasta interna do navbar ativo
     * exemplo: "informações/resgate"
     * dessa o menu informações não perderia seu status de ativo
     */
    function salvaAtualAtivo(){
        var setado = false;
        /**Atualiza o navbar com o menu atual que está selecionado */
        var idativo = localStorage.getItem('idAdminativo');      
        if(idativo != null){
            $('.nav li').removeClass('active');
            $('#' + idativo).addClass("active");            
        }        
    }

    /**
     * Atualiza o navbar ativo
     */
    function setAtivo(){
        $('li > a').removeClass('active');
        var pathname = window.location.pathname;        
        var elementoAtivo = $('nav li a[href="'+pathname+'"]');                         
        elementoAtivo.addClass('active');
        var idatual = elementoAtivo.attr('id');        
        if(idatual!=undefined){            
            localStorage.setItem('idAdminativo',idatual);
        }        
    }

    $("#botaoEditarImagem").click(function(){
        document.getElementById('imgGato').click();
    });

    $("#btn_exibir_gatos").click(function(){
        atualizarListaGatos();
    });

    $("#imgGato").change(function() {
        readURL(this);
    });

    function readURL(input) {

        if (input.files && input.files[0]) {
          var reader = new FileReader();
      
          reader.onload = function(e) {
            $('#divImgGato').attr('src', e.target.result);
          }      
          reader.readAsDataURL(input.files[0]);
        }
    }


    /**
     * Realiza a ação quando o botão de salvar novo gatinho
     * é clicado
     */
    $("#btn-salvar-gato").click(function(){
        var nm_novo_gato = $("#nm-novo-gato").val();
        var sl_novo_sexo = $('#sl-novo-sexo :selected').text();
        var sl_novo_idade = $('#sl-novo-idade :selected').text();
        var nm_desc_gato_novo=$("#nm-desc-gato-novo").val();
        console.log(nm_novo_gato);
        console.log(sl_novo_sexo);
        console.log(sl_novo_idade);
        console.log(nm_desc_gato_novo);        
        salvarNovoGato(nm_novo_gato,sl_novo_idade, sl_novo_sexo, nm_desc_gato_novo);
    });

    /**
     * Salva um novo gato no banco de dados
     * @param {*} nm_gato Nome do gato
     * @param {*} idade idade do gato (filhote/adulto)
     * @param {*} sexo sexo do gato
     * @param {*} desc Descrição do gato
     */
    function salvarNovoGato(nm_gato, idade, sexo, desc){
        $.ajax({
            //chama a função de loginPainel do controller Login            
            url: $("#baseUrl").val() + 'Admin/salvarNovoGato',
            method: "POST",
            delay: 800,
            dataType: "json",
            data: {
                nm_gato:nm_gato,
                nm_idade: idade,
                nm_sexo: sexo,
                nm_desc: desc
            }, 
            success: function(data) {
                console.log("Sucesso");
                $('#modalNovo').modal('hide');
                atualizarListaGatos();
                
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

    function atualizarListaGatos(){
        $.ajax({
            //chama a função de loginPainel do controller Login            
            url: $("#baseUrl").val() + 'Admin/exibirGatos',
            method: "GET",
            delay: 800,
            dataType: "json", 
            success: function(data) {
                data.forEach(element => {
                    console.log(element);
                });
                
            },
           error: function() {
            console.log();
            
           }
        });
    }

});
