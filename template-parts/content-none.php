<article class="not-found">
    <h2 class="non-existent">
        <?php
        _e('Contenido inexistente', 'pbw');
        ?>
    </h2>
    <p class="p-search">
        <?php
            _e('Realiza una búsqueda para encontrar lo que deseas', 'pbw');
        ?> 
    </p>
    <?php get_search_form();?>
</article>
        <div class="content-none">
        <h4 class="readings">
            <?php _e('Otras lecturas:', 'pbw');?>
        </h4>
            <?php get_template_part('loop-wp-query');?>
        </div>
