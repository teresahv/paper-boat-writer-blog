<section class="comments">
    <?php if(have_comments()):?>
    <h3>
        <?php
        comments_number(
            __('No hay comentarios aún', 'pbw'),
            __('Hay un comentario publicado', 'pbw'),
            __('Hay % comentarios', 'pbw')
        );
        ?>
    </h3>
    <ol class="comment-list">
        <?php wp_list_comments( );?>
    </ol>
    <?php endif;?>
<?php comment_form();?>
    </section>