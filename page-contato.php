<? 
/**
* Template Name: Contato
*
* @package WordPress
* @subpackage SalveUmGatinho
* @since SalveUmGatinho 0.1
*/ ?>



<?php get_header();?>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.2';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <div class="container mb-5">
        <header class="text-center m-4 border-bottom">
            <h2>Entre em contato com a gente!</h2>            
        </header>
        
        <div id="campos-contato" class="row">     
            
            <!-- Formaulário para contato -->
            <div id="campoemail" class="col-lg-3 col-md-6 offset-lg-2 mt-2 rounded shadow">
                <form>
                    <header id="titulo-email" class="text-center">E-mail</header>
                    <div class="form-group">
                        <label for="nome-contato">Nome</label>
                        <input size="10" type="text" class="form-control" id="nome-contato" placeholder="Insira seu nome">                    
                    </div>
                    
                    <div class="form-group">
                        <label for="email-contato">Email</label>
                        <input type="email" class="form-control" id="email-contato" placeholder="Seu e-mail">
                    </div>

                    <div class="form-group">
                        <label for="mensagem-contato">Mensagem</label>
                        <textarea class="form-control" rows="" cols="26"></textarea>
                    </div>           

                    <button id="enviar-email" type="button" class="btn btn-primary">Enviar</button>
                </form>
            </div>  
            <!-- FIM Formaulário para contato -->          
            
            <!-- Redes sociais -->
            <div id="camporedes" class="col-lg-3 offset-lg-1 col-md-6  mt-2 rounded shadow">
                <div class="row mt-3">
                    <div class="col-lg-12">
                        <a class="btn" href="https://www.facebook.com/salveumgatinhovca/"><span class="fab fa-facebook fa-3x"></span>/salveumgatinhovca</a>
                    </div>                    
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <a class="btn" href="https://www.instagram.com/salveumgatinho/"><span class="fab fa-instagram fa-3x"></span>@salveumgatinho</a>
                    </div>                
                </div>            
            </div>
            <!-- FIM Redes sociais -->         
        </div>
    </div>
<?php get_footer(); ?>