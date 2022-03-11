<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <?php wp_head(); ?>
   <title><?php bloginfo('name'); ?></title>
</head>
<body>
   <!-- HEADER Section -->
  <header id="home">
     <!-- Navigation -->
     <nav id="navigation" class="navbar navbar-expand-md py-3">
         <div class="container d-flex align-items-center justify-content-between">
            <a class="navbar-brand" href="#">
               <?php 
                  $custom_logo_id = get_theme_mod( 'custom_logo' );
                  $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                   
                  if ( has_custom_logo() ) {
                      echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                  } else {
                      echo '<h1>' . get_bloginfo('name') . '</h1>';
                  }
               ?>
            </a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
               <i class="fas fa-bars text-white"></i>
           </button>
            <div class="navbar-collapse collapse justify-content-end" id="navbarCollapse">
            <?php wp_nav_menu(array('theme-location' => 'headerMenu')); ?>
               <!-- <ul class="p-1 navbar-nav">
                  <li class="nav-item">
                     <a class="nav-link text-center" href="#home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-center" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-center" href="#experience">Experience</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-center" href="#work">Work</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-center" href="#contact">Contact</a>
                  </li>
               </ul>  -->
            </div>
         </div>
     </nav>
     <!-- HERO Section -->
     <section id="hero" class="text-center text-white">
         <div class="container">
            <div class="row">
               <div class="col">
                  <h1 class="display-3 text-uppercase">
                     <?php bloginfo('name'); ?>
                  </h1>
                  <p><?php bloginfo('description'); ?></p>
               </div>
            </div>
            <a class="btn text-white btn-arrow" href="#work">
               <i class="fas fa-chevron-down fa-lg"></i>
            </a>
         </div>
     </section>
  </header>