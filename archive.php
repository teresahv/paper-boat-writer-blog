<?php get_header();?>
<div class="container container-archive">
    <main class="main main-archive">
        <?php
        if(is_category()):
            $term_title=__('Resultados para la categoría:', 'pbw');
        endif;
        if(is_tag()):
            $term_title=__('Resultados para la etiqueta:', 'pbw');
        endif;
        ?>
        <div class="terms-results">
            <h3><?php echo $term_title;?></h3>
            <mark><?php single_term_title();?></mark>
        </div>
        <?php if(have_posts( )):while(have_posts()):the_post( );
                get_template_part('template-parts/content-main');  
            endwhile;else:
                get_template_part('template-parts/content-none');  
            endif;
            ?>
    </main>

<?php 
    get_template_part('template-parts/pagination');  
?>
</div>
<?php get_footer();?>