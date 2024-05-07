<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
<meta charset="<?php bloginfo( 'charset' );?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php wp_head();?> 
</head>
<body <?php body_class();?>>
    <header class="header">
        <nav id="nav" class="nav">
        <div class="nav-center">
            <div class="nav-header">
                <?php if(has_custom_logo( )):
                    the_custom_logo();
                else:
                    echo 'a href="'.esc_url(home_url('/')).'">'.
                    get_blockinfo('name').'</a>';
                endif; 
                ?>
                <button class="nav-toggle">
                    <span class="open">
                        <i class="fas fa-bars"></i>
                    </span>
                    <span class="close">
                        <i class="fas fa-times"></i>
                    </span>
                </button>
            </div>
        
            <div class="menu-container">
                <?php
                if(has_nav_menu('main_menu' )):
                    wp_nav_menu(array(
                        'theme_location'=>'main_menu',
                        'container'=>'nav',
                        'container_class'=>'principal-menu'
                    ) );
                    else:?>
                    <nav class="menu-principal">
                    <ul>
                        <?php wp_list_pages('title_li');?>
                    </ul>  
                    </nav>
                <?php
                    endif;
                ?>
                <!-- SocialMedia-->
                    <?php
                wp_nav_menu(array(
                        'theme_location'=>'social_menu',
                        'container'=>'div',
                        'container_class'=>'social-menu'
                    ) );
                    ?>
            </div>
        </div>      
        </nav>
            
                <!--B A NN E R-->
            <?php get_template_part('template-parts/header-custom');?>
            <div class="title-post">
                        <h2>
                            <?php wp_title('');?> 
                        </h2>
                        <div class="underline"></div>
            </div>
        </div>
    </header>

<main class="main">