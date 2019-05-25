<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo bloginfo('template_directory'); ?>/favicon.png">
    <!--<link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.css"/> -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2.0/dist/flickity.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/estilo.css"/>    
    <title><?php if (is_home())
            echo get_bloginfo("title") . ' - ' . get_bloginfo('description');
        if (get_search_query())
            echo 'Resultados para: "' . get_search_query() . '"';
        if (is_month())
            the_time('F Y');
        if (is_category())
            single_cat_title();
        if (is_single())
            the_title();
        if (is_page())
            the_title();
        if (is_tag())
            single_tag_title();
        if (is_404())
            echo 'Página não encontrada!';
        if (!is_home()) {
            echo " | ";
            echo get_bloginfo("title") . ' - ' . get_bloginfo('description');
        } ?></title>
    <?php wp_head(); ?>
</head>
<body>

    <div class="d-none d-lg-block" id="" style="background: #fff36b">
    
      <img style="width: 640px; height: 90px;" class=" mx-auto d-block img-fluid " alt="Responsive image" src="<?php echo bloginfo('template_directory');?>/img/banner.png">


    </div>



    <!-- Navigation -->
    <nav class="pb-0 navbar navbar-expand-lg navbar-light bg-primary sticky-top ">
    
      <div class="container">

        <a class="navbar-brand d-none d-sm-block d-lg-none" href="">
          <img src="img/bannerpequeno.png" class="img-fluid" alt="">
        </a>

        <a class="navbar-brand d-block d-sm-none" href="">
          <img src="img/bannerpequeno2.png" class="img-fluid" alt="">
        </a>
                
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarResponsive">
          
          <ul class="navbar-nav mx-auto">
            
          <li id="home" class=" mx-4 nav-item">
              <a class="nav-link" href="<?php bloginfo('url');?>">Home</a>
            <li id="informacoes" class="mx-4 nav-item ">
              <a class="nav-link" href="<?php bloginfo('url');?>/informacoes">Informações
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li id="noticias" class="mx-4 nav-item">
              <a class="nav-link" href="noticias.php">Notícias</a>
            </li>
            <li id="quemsomos" class="mx-4 nav-item">
              <a class="nav-link" href="quemsomos.php">Quem Somos</a>
            </li>
            <li id="contato" class="mx-4 nav-item ">
              <a class="nav-link" href="contato.php">Contato</a>
          </li>
          </ul>
        </div>
      </div>
    </nav>


