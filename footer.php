<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Portfolio_Black_&_White
 */

?>

	<footer id="colophon" class="portfolio-footer">
        <?php
            wp_nav_menu([
                    "menu"=> "footer-menu",
                "menu_class" => "portfolio-footer--wrapper"
            ])
        ?>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
