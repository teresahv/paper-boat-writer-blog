<?php get_header();?>
<div class="container search-container">
    
        <div class="terms-results">
            <h3><?php _e('Resultados para la búsqueda', 'pbw');?></h3>
            <mark><?php get_search_query();?></mark>
        </div>
        <?php
        if(have_posts()):while(have_posts()):the_post();
        get_template_part('template-parts/content-main');
            endwhile;else:
        get_template_part('template-parts/content-none');
            endif;
        ?>
    
    <?php
        get_template_part('template-parts/pagination');
    ?>
</div>
<?php get_footer();?>
