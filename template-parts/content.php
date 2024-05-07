<?php get_header();?>
<div class="container content-container">
    <ul class="content-categories">
    <?php
    wp_list_categories(array(
        'orderby'=>'name',
        'separator'=>'',
        'title_li'=>''
    ));
    ?>
    </ul>
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