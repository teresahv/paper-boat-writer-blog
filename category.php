<?php get_header();?>
<div class="container category-container">
 
 <div class="post-card--center">
    <?php
    if(have_posts()):while(have_posts()):the_post();
    get_template_part('template-parts/content-main');
endwhile;else:
    get_template_part('template-parts/content-none');
    endif;
    ?>
</div> 
    <?php
    get_template_part('template-parts/pagination');
    ?>
</div>
<?php get_footer();?>