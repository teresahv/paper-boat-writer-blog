<?php get_header();?>
<div class="container single-container">

        <?php while(have_posts( )):the_post( );?>
    <section class='post-content'>
        <article class="content">
            <div class="category-wrapper">
                <?php the_category();?>
            </div>
            <?php the_content();?>
        </article>

        <div class="author-post">
                <?php the_author_posts_link( )?> 
                <p class="text-sm">
                <?php the_time( );?>
                <i class="fas fa-feather-alt"></i> 
                <?php the_time(get_option('date_format'));?>
                </p> 
        </div>
    </section>
        <div class="pagination-prev-next">
                    <div class="post-prev"><?php previous_post_link();?></div>
                    <div class="post-next"><?php next_post_link();?></div>
        </div>
    <?php comments_template($file = '/comments.php', $separate_comments = false);?>
    <?php endwhile;?>

    
</div>
<?php get_footer();?>