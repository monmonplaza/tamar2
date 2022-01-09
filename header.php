<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        // wp_title(''); 
        wp_head(); 
     ?>
</head>
<body <?php body_class(); ?>>

    <header class="header">
        <div class="header__top ">
            <div class="container">
                <div class="header__top__wrapper d--flex">
                    <div class="header__logo">
                        <img src="<?php echo get_template_directory_uri()?>/images/tvr_logo.png" alt="Tamar Logo">
                    </div>
                    <ul class="header__icon d--flex">
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fa fa-phone"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="header__low ">
            <div class="container">
                <div class="header__low__wrapper d--flex">
                
                    <nav class="header__nav only--lg">
                        <?php wp_nav_menu( [
                            'theme_location' => 'primary_menu',
                        ] )?>

<a href="" class="scroll__phone"><i class="fas fa-phone"></i></a>

                    </nav>

                    <div class="toggle__menu only--sm">
                        <a ><i class="fas fa-bars"></i></a>
                    </div>

                    
                 </div>
            </div>
            <div class="mobile__nav only--sm">
                <a href="#" class="back__btn" id="backToMenu"><i class="fas fa-angle-left"></i> Back</a>
                <div class="mobile__nav__wrap">
                        <?php wp_nav_menu( [
                                'theme_location' => 'mobile_menu',
                            ] )?>
                    </div>
                </div>
        </div>
    </header>
