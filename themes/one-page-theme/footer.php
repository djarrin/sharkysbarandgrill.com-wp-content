<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package One Page Theme
 */
?>

	<hr>

      <footer>
        <p>&copy; <?php bloginfo('name');?><?php echo date(' Y'); ?></p> <!--will display the current year in the footer-->
      </footer>
    </div> <!-- /container -->

    <?php wp_footer(); ?>

  </body>
</html>
