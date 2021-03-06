<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php geraTitle(); ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/bootstrap.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/fontello.css">
  <link rel="icon" href="<?php bloginfo('template_url'); ?>/img/favicon.png">
 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Fonte titulo -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
  <!-- Fonte p a -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2&display=swap" rel="stylesheet">
  
</head>
<body>
<header id="header">
  <div class="container logo" >
    <div class="row">
      <div class="col-sm-12 col-md-12 col-lg-5 col-xl-5   ">

        <div class="logo-img">
          <a href="<?php bloginfo('home'); ?> ">
           
            <img src="<?php bloginfo('template_url'); ?>/img/logo/proj2.png" alt="">
          
          </a>
        </div>
      </div>
      <div class="col-md-12 col-lg-4 col-xl-4 form">
        <div class="row">
          <div class="col-12 ">
            
              <?php //FORMULARIO DE BUSCA
              dynamic_sidebar('Busca'); ?>
            
          </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-12 col-lg-3 col-xl-3  pb-2 coluna-busca">
        
        <div class="row telefone justify-content-end">
          <div class="conteudo-phone">
            <div class="phone">
              <span>SAC: Fone: (11) 3983-1936</span>
              <i class="icon-phone-outline"></i> 
            </div>
            <div class="cel">
              <span>Cel: (11) 98876-9587</span> 
              <i class="fa fa-whatsapp"></i>
            </div>
            
            
          </div>

          
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar menu navbar-expand-lg navbar-light" role="navigation">
    <div class="container">
    <a class="navbar-brand" href="#" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">Menu</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
       <span class="navbar-toggler-icon"></span>
    </button>

    </button>
      <?php
      wp_nav_menu( array(
        'theme_location'    => 'principal',
        'depth'             => 2,
        'container'         => 'div',
        'container_class'   => 'collapse navbar-collapse',
        'container_id'      => 'bs-example-navbar-collapse-1',
        'menu_class'        => 'nav navbar-nav collapse navbar-collapse d-flex flex-wrap justify-content-between  ',
        'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
        'walker'            => new WP_Bootstrap_Navwalker(),
      ) );
      ?>

    </div>
  </nav>
  

</header>
