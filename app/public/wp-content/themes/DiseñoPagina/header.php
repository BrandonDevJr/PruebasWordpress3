<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
</head>
<body <?php body_class(); ?>> 


<header class="header">
        <div class="barra-navegacion">
            <div class="logo">
                <a href="<?php echo site_url('/');?>">
                    <img class="logo" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="logotipo">
                </a>
            </div>
        </div>
            
        <!-- Navegacion principal -->
        <div class="contenedor-menu">
            <?php
                $args = array(
                    'theme_location' => 'menu-principal',
                    'container' => 'nav',
                    'container_class' => 'menu-principal'
                );
                wp_nav_menu($args);
            ?> 
        </div>

        <div class="overlay carrusel-header swiper mySwiper">
            <div class="carrusel-background swiper-wrapper">
                <div class="background1 swiper-slide">
                    <h1 class="ml12">Innovamos en el campo del Turismo y El trabajo en Equipo</h1>
                </div>
                <div class="background2 swiper-slide">
                    <h1 class="ml13">Siempre Buscando Mejorar la  Satifaccion de nuestros clientes</h1>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        
   </header>
</body>
    


