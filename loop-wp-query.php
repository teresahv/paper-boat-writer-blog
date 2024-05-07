<section class="wp-query">
<?php
$wp_query=new WP_Query(array(
    'posts_per_page'=>4,
    'orderby'=>'rand'
));

if($wp_query->have_posts( )):
    while($wp_query->have_posts( )):
        $wp_query->the_post( );
?>
<div class="wp-post">
    <a class="blog-img" href="<?php the_permalink();?>">
    <?php the_post_thumbnail();?>
    <div class="loop-wp">
        <h2>
            <a href="<?php the_permalink();?>" class="blog-title"><?php the_title();?></a>
        </h2>
        <div class="tag-wrapper">
            <?php if(has_tag()):
                    the_tags('<p>', ' • ', '</p>');
                else:?>
                <i class="fas fa-tags"></i>
                <?php endif;?>
        </div>
    
    <div class="blog-time">
        <div class="read-more-container">
        <a href="<?php the_permalink();?>" class="read-more">Leer más</a>
        </div>
        <div class="wrapper">
                <p class="text-sm">
                <?php the_author_posts_link( )?> <br>
                <?php the_time( );?>
                <i class="fas fa-feather-alt"></i> <br>
                <?php the_time(get_option('date_format'));?>
                </p>
        </div>
        <div class="category-wrapper">
            <?php if(has_category()):
                    the_category();
                else:?>
                    <i class="book fab fa-readme"></i>
                <?php endif;?>
        </div>
    </div>
    </div>
</div>

<?php 
endwhile;
endif;
wp_reset_postdata( );
wp_reset_query(  );
?>
</section>