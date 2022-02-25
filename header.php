<!DOCTYPE html>
<html lang="tr-TR">
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <title>BOM AJANS</title>
      <meta name="description" content="Bom Ajans - Aday Template">
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
      <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/favico.jpg">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->
         <?php wp_head(); ?>
   </head>
   <body>
      <!-- preloader -->
      <div id="preloader">
         <!-- <div class="book"> -->
         <div class="inner">
            <p class="loader_text">Bom Ajans</p>
         </div>
      </div>
      <!-- site wrapper -->
      <div class="site-wrapper">
         <div class="main-overlay"></div>
         <!-- header -->
         <header class="header-personal">
            <nav class="navbar navbar-expand-lg">
               <div class="container-xl">
                  <div class="collapse navbar-collapse justify-content-center centered-nav">


<?php
         wp_nav_menu(
         array('theme_location' => 'ust-menu',
               'container' => 'ul',
               'menu_class' => 'navbar-nav mr-auto',
               
               )
         );
?>         

                  


                     <!-- menus -->
                     <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                           <a class="nav-link" href="#">Anasayfa</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Web Tasarım</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">E-Ticaret</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Wordpress</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Php</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Codeigniter</a>
                        </li>
                        <li class="nav-item">
                           <a class="nav-link" href="#">Seo</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </nav>
         </header>