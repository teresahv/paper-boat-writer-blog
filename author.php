<?php get_header();?>
<div class="container author-container">
    
    <?php get_template_part('template-parts/content-author');?>
    <div class="search-cont--center">
        <?php get_search_form();?>
    </div>
    <div class="post-card--center">
        <?php
        if(have_posts()):while(have_posts()):the_post();
        get_template_part('template-parts/content-main');
            endwhile;else:
        get_template_part('template-parts/content-none');
            endif;
        ?>
    </div>
    <?php get_template_part('template-parts/pagination'); ?>
    
</div>
<?php get_footer();?>