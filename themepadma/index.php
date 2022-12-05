<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
    <!-- Header part start -->
    <header class="slider container-fluid px-0 position-absolute">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php
                $x = 0;
                while(have_posts()){the_post();
                $x++;
                ?>

                <div class="carousel-item <?= ($x==1)?'active':''?>">
                    <?php the_post_thumbnail(); ?>
                <!-- <img src="..." class="d-block w-100" alt="..."> -->
                </div>
                
                <?php }?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </header>
    <!-- Header part end -->

    <!-- Logo part start -->
    <section class="container-fluid logo position-relative pt-2">
        <div class="row">
            <div class="logo_left col-sm-6">
                <?php the_custom_logo(); ?>
            </div>
            <div class="logo_right col-sm-6 text-end">
                <?php dynamic_sidebar('ltr'); ?>
            </div>
        </div>
    </section>
    <!-- Logo part end -->

    <!-- Menu part start -->
    <section class="container-fluid menu_one">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-light">
            <div class="container">
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                wp_nav_menu(array(
                    'theme_location'=>'TM',
                    'menu_class'=>'navbar-nav menu_item',
                )); ?>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
        </div>
    </section>
    <!-- Menu part end -->

<?php wp_footer(); ?>
</body>
</html>