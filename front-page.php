<?php get_header();?>
<div class="container front-page--container">
    
    <?php while(have_posts( )):the_post( );?>
        <?php the_content();?>
        <?php endwhile;?>
        
        <?php get_search_form();?>
        <?php get_template_part('loop-wp-query');?>
    
</div>
<?php get_footer();?>