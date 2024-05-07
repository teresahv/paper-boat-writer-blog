</main>

    <!-- footer -->
    <footer class="section">
    <p>
          <small>
            <?php
              if ( get_option('pbw_footer_text') !== '' ):
              echo esc_html( get_option( 'pbw_footer_text' ) );
              else:
            ?>
                María Méndez &#64;paperboatwriter - Todos los derechos reservados
                 - copyright &copy; <?php echo date('Y');?>
            <?php
              endif;
            ?>
          </small>
        </p>
    </footer>
    
<?php wp_footer();?>

</body>
</html>