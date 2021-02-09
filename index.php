<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">

        <?php wp_head(); ?>
    </head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
		<header class="hero-banner">
            <?php get_template_part('template-parts/nav') ?><!-- #site-navigation -->
            <div>
                <h1 class="hero-banner--author">
                    <span>
                        <?= get_option('p_author_firstname') ?>
                    </span>
                        <span>
                        <?= get_option('p_author_lastname') ?>
                    </span>
                </h1>
                <h2 class="hero-banner--meta-author">
                    <?= get_option('p_author_job') ?>
                </h2>
            </div>

			<div class="hero-banner--bottom-wrapper">
				<div class="circle-slider">
					<ul is="circle-slider" class="circle-slider--wrapper" id="slider-skills">
                        <?php
                            $skills = get_option('p_author_skills');
                            $skills = $skills ? json_decode($skills) : [];
                            foreach ($skills as $skill) {
                                echo "<li class='circle-slider--items-start'>" . $skill . "</li>";
                            }
                        ?>

					</ul>
				</div>

			</div>
			
		</header>



<?php
get_footer();
