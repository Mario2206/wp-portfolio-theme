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
            <span class="circle-decorator hero-banner--decorator-top"></span>
            <span class="circle-decorator hero-banner--decorator-bottom"></span>
            <div>
                <h1 class="hero-banner--author">
                    <span>
                        <?= esc_html(get_option('p_author_firstname')) ?>
                    </span>
                        <span>
                        <?= esc_html(get_option('p_author_lastname') )?>
                    </span>
                </h1>
                <h2 class="hero-banner--meta-author">
                    <?= esc_html( get_option('p_author_job') ) ?>
                </h2>
            </div>

			<div class="hero-banner--bottom-wrapper">
				<div class="circle-slider">
					<ul is="circle-slider" class="circle-slider--wrapper" id="slider-skills">
                        <?php
                            $skills = get_option('p_author_skills');
                            $skills = $skills ? json_decode($skills) : [];
                            foreach ($skills as $skill) {
                                echo "<li class='circle-slider--items-start'>" .esc_html( $skill ) . "</li>";
                            }
                        ?>

					</ul>
				</div>
                <button class="hero-banner--bottom-btn">
                    <svg width="29" height="39" viewBox="0 0 29 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5 34L16.2389 34.988L14.5 38.0485L12.7611 34.988L14.5 34ZM25.2611 11.012C25.8068 10.0516 27.0276 9.71542 27.988 10.2611C28.9484 10.8068 29.2846 12.0276 28.7389 12.988L25.2611 11.012ZM0.261087 12.988C-0.284581 12.0276 0.0516059 10.8068 1.01198 10.2611C1.97236 9.71542 3.19325 10.0516 3.73891 11.012L0.261087 12.988ZM12.7611 33.012L25.2611 11.012L28.7389 12.988L16.2389 34.988L12.7611 33.012ZM3.73891 11.012L16.2389 33.012L12.7611 34.988L0.261087 12.988L3.73891 11.012Z" fill="black"/>
                        <path d="M14.5 17L16.24 17.986L14.5 21.0567L12.76 17.986L14.5 17ZM21.26 1.01398C21.8045 0.0529766 23.025 -0.284611 23.986 0.259956C24.947 0.804523 25.2846 2.02503 24.74 2.98603L21.26 1.01398ZM4.25996 2.98603C3.71539 2.02503 4.05297 0.804523 5.01397 0.259956C5.97497 -0.284611 7.19548 0.0529766 7.74004 1.01398L4.25996 2.98603ZM12.76 16.014L21.26 1.01398L24.74 2.98603L16.24 17.986L12.76 16.014ZM7.74004 1.01398L16.24 16.014L12.76 17.986L4.25996 2.98603L7.74004 1.01398Z" fill="black"/>
                    </svg>
                </button>
                <h2 class="hero-banner--meta-author-large">
                    <?= esc_html( get_option('p_author_job') ) ?>
                </h2>
			</div>
			
		</header>
        <section class="author-section">
            <h2 class="second-title">Un petit bout de mon histoire ...</h2>
            <img class="author-section--portrait" src="<?= get_option("p_author_img") ?>" title="<?= get_option("p_author_firstname") . " " . get_option("p_author_lastname") ?>" alt="<?= get_option("p_author_firstname") . " " . get_option("p_author_lastname") . " portrait"?>" />
            <p>
                <?= get_option("p_author_desc") ?>
            </p>
        </section>



<?php
get_footer();
