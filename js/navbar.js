$(document).ready(function(){
    /**Seleciona navbar que foi clicacado e remove a classe ativa do navbar anteriormente selecionado */
    setNavAtivo();
    salvaAtualAtivo();   
    
    /**
     * Salva o navbar ativo para quando 
     * o link clicado for uma pasta interna do navbar ativo
     * exemplo: "informações/resgate"
     * dessa o menu informações não perderia seu status de ativo
     */
    function salvaAtualAtivo(){        
        /**Atualiza o navbar com o menu atual que está selecionado */
        var idativo = localStorage.getItem('idativo');      
        if(idativo != null){
            $('.navbar-nav li').removeClass('active');
            $('#' + idativo).addClass("active");            
        }        
    }

    /**
     * Atualiza o navbar ativo
     */
    function setNavAtivo(){
        var pathname = window.location.pathname;        
        var elementoAtivo = $('.navbar-nav li a[href="'+pathname+'"]').parent();        
        elementoAtivo.addClass('active');
        var idatual = elementoAtivo.attr('id');
        console.log(idatual);
        if(idatual!=undefined){            
            localStorage.setItem('idativo',idatual);
        }        
    }
});

