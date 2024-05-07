<?php get_header();?>
<div class="container error404-container">

        <h2 class="title-404"><?php _e('Error 404: Not Found', 'pbw');?></h2>
        
        <?php get_template_part('template-parts/content-none');?>
    
        <?php
        get_template_part('template-parts/pagination');
        ?>
</div>
<?php get_footer();?>