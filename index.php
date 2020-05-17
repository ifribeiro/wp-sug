
<?php get_header();?>
<!-- Page Content -->
<div class="container">
  
    <!-- Inicio seção -->
    <div class="row mt-3 mb-3 ">

    <!-- 3 BOTÕES -->
    <div style="" class="row d-flex flex-md-column col-lg-4 col-sm-12 align-items-center justify-content-center">

    <!-- Início BOTÃO 1 -->
    <div class="mr-4 d-flex align-items-center mb-2" style="width: 16rem;">
      <img class="card-img-top " src="<?php echo bloginfo('template_directory');?>/img/gato1.png" alt="Card image cap">
      <div class="mt-1">
        <h5 class="text-center m-0">Adote Um Gatinho</h5>
        <p class="text-center">Veja o os gatinhos para adoção</p>
      </div>
    </div>
    <!-- FIM BOTÃO 1 -->

    <!-- Início BOTÃO 2 -->
    <div class="mr-4 d-flex align-items-center mb-2" style="width: 16rem;">
      <img class="card-img-top " src="<?php echo bloginfo('template_directory');?>/img/gato2.png" alt="Card image cap">
      <div class="mt-1">
        <h5 class="text-center m-0">Resgate</h5>
        <p class="text-center">Veja o que fazer quando encontrar um gatinho</p>
      </div>
    </div>
    <!-- FIM BOTÃO 2 -->

    <!-- Início BOTÃO 3 -->
    <div class="mr-4 d-flex align-items-center mb-2" style="width: 16rem;">
      <img class="card-img-top " src="<?php echo bloginfo('template_directory');?>/img/gato3.png" alt="Card image cap">
      <div class="mt-1">
        <h5 class="text-center m-0">Ajude-nos</h5>
        <p class="text-center">Saiba como ajudar nossa ONG</p>
      </div>
    </div>
    <!-- FIM BOTÃO 3 -->

    </div>
    <!-- Fim div de botões -->

     <!-- div carousel -->
    <div class="col-lg-8 d-none d-lg-block" id="">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
          
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo bloginfo('template_directory');?>/img/slide1.jpg" alt="First slide">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo bloginfo('template_directory');?>/img/slide2.jpg" alt="Second slide">
          </div>

          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo bloginfo('template_directory');?>/img/slide3.jpg" alt="Second slide">
          </div>

      </div>
    </div>
    </div> 
    <!-- Fim div carousel -->


</div>
<!-- fim da seção -->

  


  
</div>
<!-- /.container -->


</div>
<!-- Fim home -->
<?php get_footer(); ?>