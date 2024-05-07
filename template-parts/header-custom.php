<div class="banner-text">

<?php 
    if(has_custom_header( )):
        the_custom_header_markup( );
    endif;
?>
<div class="banner-text-container">
    <h1 class="banner-text__title">
        <a href="<?php echo esc_url('/');?>">
            <?php bloginfo('name')?>
        </a>
    </h1>
    <p class="banner-text__description">
    <?php echo bloginfo('description')?>
    </p>
</div>
</div>