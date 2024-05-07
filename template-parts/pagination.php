<?php if(get_next_post_link() || get_preview_post_link()):?>
<div class="pagination">
    <nav class="pagination-nav">
     <?php
     echo paginate_links(array(
        'prev-text'=>__('<span>&laquo;Anteriores</span>', 'pbw'),
        'next-text'=>__('<span>Siguientes&laquo;</span>', 'pbw'),
     ));
     ?>
    </nav>
</div>
<?php endif;?>