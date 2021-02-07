<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Portfolio_Black_&_White
 */

get_header();
?>

	<main id="primary" class="site-main">
	
		<section>
			<h1>
				<span>
					<?= get_option('p_author_firstname') ?>
				</span>
				<span>
					<?= get_option('p_author_lastname') ?>
				</span>
			</h1>
			<div>
				<h2>
					<?= get_option('p_author_job') ?>
				</h2>
				<div>
					<ul>
                        <?php
                            $skills = get_option('p_author_skills');
                            $skills = $skills ? json_decode($skills) : [];
                            foreach ($skills as $skill) {
                                echo "<li>" . $skill . "</li>";
                            }
                        ?>

					</ul>
				</div>

			</div>
			
		</section>

	</main><!-- #main -->

<?php
get_footer();
