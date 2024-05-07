<article class="post-card">
    <a class="blog-img" href="<?php the_permalink();?>">
    <?php the_post_thumbnail();?>
    </a>
    <div class="blog-info">
        <h2>
            <a href="<?php the_permalink();?>" class="blog-title"><?php the_title();?></a>
        </h2>

        
        <?php the_excerpt();?>
        
        
        <div class="blog-time">
            <div class="blog__logo">
            <?php if(has_custom_logo( )):
                    the_custom_logo();
                else:
                    echo 'a href="'.esc_url(home_url('/')).'">'.
                    get_blockinfo('name').'</a>';
                endif; 
                ?>
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
</article>