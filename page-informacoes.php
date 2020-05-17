<?php 
/**
* Template Name: Informacoes
*
* @package WordPress
* @subpackage SalveUmGatinho
* @since SalveUmGatinho 0.1
*/ ?>
<?php get_header();?>
    <div class="mb-5 container">    
      <header class="m-4 text-center border-bottom">
          <h2>Informações</h2>            
      </header>
      
      <!-- Área dos cards -->
      <div id="cards-informacoes" class="row text-center">

        <!-- Início Card Deck -->
          <div class="card-deck">
          <!-- Início do card-->
            <div class="col-lg-3 col-md-4 ">
            <div class="card text-center borda-card">
              <img class="card-img-top card-imagem" src="img/resgate2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Resgate</h5>
                <p class="card-text">Encontrei um gatinho que precisa de ajuda, e agora?</p>
              </div>
              <div class="btn-card">
                <a href="resgate.php"><button type="button" class="btn card__btn">Saiba mais</button></a>
              </div>              
            </div>
          </div>   
          <!-- Fim Card -->      

          <!-- Início Card -->
          <div class="col-lg-3 col-md-4 mb-3">
            <div class="card borda-card">
              <img class="card-img-top card-imagem" src="img/adocao.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Adoção</h5>
                <p class="card-text">Quero adotar um gatinho, o que preciso?</p>
              </div>
              <div class="btn-card">
                <a href="adocao.php"><button type="button" class="btn card__btn">Saiba mais</button></a>
              </div>
            </div>
          </div>
          <!-- Fim Card -->

          <!-- Início Card -->
          <div class="col-lg-3 col-md-4">
            <div class="card borda-card">
              <img class="card-img-top card-imagem" src="img/castracao2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Castração</h5>
                <p class="card-text">Por que você deve castrar seu gatinho?</p>
              </div>
              <div class="btn-card">
                <a href="castracao.php"><button type="button" class="btn card__btn">Saiba mais</button></a>
              </div>
            </div>
          </div>
          <!-- Fim Card -->

          <!-- Início Card -->
          <div class="col-lg-3 col-md-4">
            <div class="card borda-card">
              <img class="card-img-top card-imagem" src="img/queroajudar2.jpg" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">Quero ajudar</h5>
                <p class="card-text">Tenho interesse em ajudar a ONG, o que posso fazer?</p>
              </div>
              <div class="btn-card">
                <a href="queroajudar.php"><button type="button" class="btn card__btn">Saiba mais</button></a>
              </div>
            </div>
          </div>
          <!-- Fim Card -->
          
          <!-- Início Card -->
            <div class="col-lg-3 col-md-4">
              <div class="card borda-card">
                  <img class="card-img-top card-imagem" src="img/lartemporario.jpg" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Lar temporário</h5>
                      <p class="card-text">Como funciona o Lar Temporário?</p>
                  </div>
                  <div class="btn-card">
                    <a href="lartemporario.php"><button type="button" class="btn card__btn">Saiba mais</button></a>
                  </div>
              </div>
            </div>
          <!-- Fim Card -->
      </div>

        </div>
    <!-- /.row -->
  </div>
<?php get_footer(); ?>