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

		<header class="hero-banner" id="header">

            <!--     Navigation       -->
            <?php get_template_part('template-parts/nav') ?>

            <!--    Landing banner        -->
            <?php if(!isset($_COOKIE['portfolio_visit'])) : ?>
                <?php get_template_part('template-parts/landing-banner', null, ["words" => ['Passionné', "Prêt à apprendre", 'Perfectionniste']]) ?>
            <?php endif ?>

            <span class="circle-decorator top-left-decorator"></span>
            <span class="circle-decorator bottom-right-decorator circle-decorator-rotate-180"></span>
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
                            $skills = get_terms('technology');
                            foreach ($skills as $skill) :

                        ?>
                                <li class='circle-slider--items-start'>
                                    <a class='circle-slider--items' href='/technology/<?= $skill->slug ?>' > <?= esc_html( $skill->name ) ?> </a>
                                </li>

                        <?php
                        endforeach;
                        ?>

					</ul>
				</div>
                <a class="hero-banner--bottom-btn arrow-btn" href="#author">
                    <svg width="29" height="39" viewBox="0 0 29 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5 34L16.2389 34.988L14.5 38.0485L12.7611 34.988L14.5 34ZM25.2611 11.012C25.8068 10.0516 27.0276 9.71542 27.988 10.2611C28.9484 10.8068 29.2846 12.0276 28.7389 12.988L25.2611 11.012ZM0.261087 12.988C-0.284581 12.0276 0.0516059 10.8068 1.01198 10.2611C1.97236 9.71542 3.19325 10.0516 3.73891 11.012L0.261087 12.988ZM12.7611 33.012L25.2611 11.012L28.7389 12.988L16.2389 34.988L12.7611 33.012ZM3.73891 11.012L16.2389 33.012L12.7611 34.988L0.261087 12.988L3.73891 11.012Z" fill="black"/>
                        <path d="M14.5 17L16.24 17.986L14.5 21.0567L12.76 17.986L14.5 17ZM21.26 1.01398C21.8045 0.0529766 23.025 -0.284611 23.986 0.259956C24.947 0.804523 25.2846 2.02503 24.74 2.98603L21.26 1.01398ZM4.25996 2.98603C3.71539 2.02503 4.05297 0.804523 5.01397 0.259956C5.97497 -0.284611 7.19548 0.0529766 7.74004 1.01398L4.25996 2.98603ZM12.76 16.014L21.26 1.01398L24.74 2.98603L16.24 17.986L12.76 16.014ZM7.74004 1.01398L16.24 16.014L12.76 17.986L4.25996 2.98603L7.74004 1.01398Z" fill="black"/>
                    </svg>
                </a>
                <h2 class="hero-banner--meta-author-large">
                    <?= esc_html( get_option('p_author_job') ) ?>
                </h2>
			</div>
			
		</header>
        <section class="author-section p-h-box" id="author">
            <h2 class="second-title">Un petit bout de mon histoire ...</h2>
            <div class="author-section--portrait">
                <svg viewBox="0 0 63 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.8233 7.13079C31.8861 5.72352 31.4129 4.45787 31.0346 3.68527C30.8089 3.22427 30.2523 3.08911 29.8117 3.35244C27.9779 4.44845 23.3715 7.38338 21.1011 10.4731C16.8601 16.2446 18.8544 23.8267 18.0933 28.1089C17.263 32.7809 14.2804 36.6601 12.8337 42.4457C10.1261 53.2739 13.1893 62.3638 11.5603 70.9984C10.8238 74.9024 7.53093 75.9013 6.1991 79.6443C0.815232 94.7751 3.37383 123.5 7.50004 123.5C12 123.5 19.5 122.276 23.3813 122.703C25.3083 122.915 39.5 122.703 49.5 123.5C53.887 123.85 53.1333 111.978 53.0093 110.348C52.9997 110.222 53.0117 110.105 53.0466 109.984C53.526 108.324 57.1427 95.4846 56.8761 86.8801C56.5331 75.8137 52.4297 67.046 49.3884 59.5358C47.1149 53.9218 49.9236 49.9665 48.6577 44.0434C47.6245 39.2089 43.2401 35.6276 44.3914 32.125C45.8306 27.7467 48.8037 24.7589 48.8015 18.9054C48.7997 13.9835 45.5975 7.1635 44.2751 4.55667C43.9903 3.99541 43.2729 3.87076 42.8517 4.33839C42.1771 5.0874 41.3104 6.25582 41.0453 7.54209M31.8233 7.13079C35.3861 6.93429 37.4335 6.84791 41.0453 7.54209M31.8233 7.13079C31.26 7.31386 30.3927 7.33353 30.3927 7.33353M41.0453 7.54209C41.5555 7.77303 42.3636 7.86744 42.3636 7.86744" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
                <img src="<?= get_option("p_author_img") ?>" title="<?= get_option("p_author_firstname") . " " . get_option("p_author_lastname") ?>" alt="<?= get_option("p_author_firstname") . " " . get_option("p_author_lastname") . " portrait"?>" />
            </div>
            <p class="author-section--txt">
                <?= get_option("p_author_desc") ?>
            </p>
            <!--            REVIEW           -->
            <svg viewBox="0 0 597 466" fill="none" class="author-section--top-decorator">
                <path d="M514.084 225.885C506.762 229.492 494.709 235.632 490.401 235.921C486.093 236.211 475.12 230.971 465.36 232.313C455.189 233.711 441.974 244.323 441.974 244.323C441.974 244.323 450.52 245.655 455.683 247.549C459.574 248.976 464.086 250.669 465.275 252.091C466.66 253.749 449.846 273.969 450.927 293.64C452.009 313.312 466.53 338.431 474.353 342.937C482.176 347.444 494.25 351.328 508.03 353.528C519.579 355.372 538.164 354.909 538.164 354.909C553.421 353.169 566.112 341.307 575.344 319.875C575.344 319.875 582.737 318.4 587.207 319.621C591.138 320.695 596.268 324.799 596.268 324.799C596.268 324.799 598.774 313.617 596.65 306.995C594.387 299.935 584.937 292.055 584.937 292.055" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M537.357 355.099C543.994 360.486 546.246 368.994 554.567 370.952C586.313 378.423 626.066 338.927 635.888 297.192C639.963 279.876 632.463 225.622 605.674 192.614C566.715 144.611 478.645 86.0031 380.059 77.0782C280.152 68.0338 161.186 110.852 163.007 216.362C163.389 238.535 143.46 265.445 125.401 279.089C111.968 289.238 93.8234 290.314 48.814 292.285C26.5938 293.259 0.57807 314.438 4.10037 322.12C7.62266 329.802 64.8768 322.717 98.8725 323.864C121.973 324.644 136.243 321.226 157.315 311.728C170.313 305.87 180.844 295.043 187.492 283.803C200.926 267.167 203.601 260.817 217.203 261.098C272.041 262.231 289.102 291.742 305.967 302.928C314.738 308.745 327.208 307.827 336.929 299.174C342.003 294.657 338.097 279.65 327.232 274.048C323.158 271.947 312.229 268.232 312.229 268.232C314.79 257.35 366.809 269.275 412.942 296.503C428.654 305.777 443.16 310.468 454.343 313.1" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M515.437 336.615C512.728 335.927 508.349 337.612 508.349 337.612C508.349 337.612 511.431 341.213 514.163 342.027C516.927 342.85 521.527 341.475 521.527 341.475C521.527 341.475 518.386 337.364 515.437 336.615Z" fill="black" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M518.557 334.684C514.33 332.441 506.77 332.672 506.227 333.686C505.402 335.228 509.344 340.991 514.524 342.111C518.32 342.932 525.198 340.435 525.198 340.435C525.198 340.435 521.587 336.293 518.557 334.684Z" fill="white" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M478.301 316.454C476.779 315.618 471.999 315.732 471.999 315.732C471.999 315.732 473.947 319.276 475.839 320.443C478.832 322.29 482.694 322.056 482.694 322.056C482.694 322.056 479.955 317.363 478.301 316.454Z" fill="black" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path id="eye1" d="M474.206 312.825L469.877 311.806C469.877 311.806 471.284 319.438 476.391 321.335C479.695 322.562 484.526 322.868 485.113 321.484C485.407 320.791 485.145 317.465 482.333 315.499C479.595 313.585 476.045 313.258 474.206 312.825Z" fill="white" fill-opacity="0.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
                <path d="M483.648 345.506C483.817 344.784 477.857 341.797 476.563 342.034C475.268 342.271 476.072 344.097 479.075 345.356C482.077 346.615 483.388 346.609 483.648 345.506Z" fill="white" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                </path>
            </svg>
            <!--            REVIEW           -->
            <svg  viewBox="0 0 142 144" fill="none" class="author-section--bottom-decorator">
                <path d="M54.2067 38.1366C54.2067 38.1366 53.0597 43.6393 53.0597 48.8895C53.0597 51.3268 40.616 55.1223 38.1492 62.653C37.2094 65.522 36.2165 69.5653 36.8589 72.5456M54.2067 38.1366L55.9271 40.4306M54.2067 38.1366C54.2067 38.1366 49.9283 30.7074 50.9092 25.2333C51.7844 20.3488 57.3211 14.9028 59.103 13.257C59.4566 12.9304 59.6931 12.4978 59.7627 12.0215L60.7893 4.99313C61.0511 3.20059 63.3707 2.65183 64.408 4.13703L64.6728 4.51618L67.0168 7.87239C67.5023 8.56753 68.3736 8.88199 69.2009 8.69599C71.3609 8.21031 75.6104 7.43291 78.5798 8.02877C81.3877 8.59223 84.7001 10.7147 86.7289 12.1762C87.7366 12.9022 89.1839 12.6354 89.8045 11.5597L91.1101 9.29658C91.8959 7.93465 93.8556 7.97474 94.5499 9.38546C97.0733 14.5122 101.569 24.3212 100.946 27.9573C99.5194 36.2766 93.5242 41.6263 99.2252 45.4486C111.842 53.9074 147.072 50.3004 174.638 62.653C193.919 71.293 212.488 89.6068 220.804 88.7465C225.785 88.2312 231.498 87.7063 236.001 90.1802C250.912 98.3723 250.366 110.673 263.528 113.1C283.743 116.827 302.812 121.722 303.959 134.338C304.136 136.286 303.793 138.269 301.952 138.926C299.944 139.643 292.266 133.955 285.034 132.331C278.009 130.754 267.198 128.846 256.36 125.449C237.548 119.555 226.252 99.6427 213.062 101.363C197.508 103.392 191.699 124.303 183.24 127.743C166.677 134.481 135.355 130.467 110.982 133.478C100.261 134.803 90.4795 142.654 84.3146 141.794C80.5581 141.27 78.2531 137.513 79.2966 133.478C80.3679 129.336 88.4723 127.35 88.4723 127.35M109.118 110.23C110.3 110.73 111.15 111.097 111.561 111.277C111.748 111.358 111.939 111.41 112.141 111.435C113.714 111.634 121.014 112.668 122.164 114.84C123.54 117.438 121.091 119.221 118.724 119.715C111.842 121.148 105.677 121.148 96.6445 122.869C93.069 123.55 88.4723 127.35 88.4723 127.35M109.118 110.23C103.777 107.97 91.65 103.008 82.4508 100.503C66.6315 96.1949 56.4386 98.9406 40.4431 95.3416C28.9735 92.7609 20.3712 96.9187 9.47501 98.4958C2.52232 99.5021 1.12286 95.5868 2.44985 91.9007C3.74019 88.3164 11.3447 85.2042 16.3568 83.2984C17.6732 82.7979 19.1306 82.4684 20.6579 82.2574M109.118 110.23C109.118 110.23 106.361 113.816 103.956 114.123C97.218 114.983 84.3146 114.267 80.1568 117.277C77.4813 119.215 78.1063 122.86 80.1568 125.449C82.2247 128.061 88.4723 127.35 88.4723 127.35M36.8589 72.5456C37.7059 76.4761 40.4431 79.1264 40.4431 80.431C40.4431 83.7265 29.4036 81.0491 20.6579 82.2574M36.8589 72.5456C36.8589 72.5456 31.1056 72.9857 27.3964 75.4131C23.6872 77.8404 20.6579 82.2574 20.6579 82.2574" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M61.5222 17.2045C61.5222 17.3772 61.4479 17.575 61.3127 17.7272C61.1799 17.8767 61.0434 17.925 60.9452 17.925C60.8469 17.925 60.7104 17.8767 60.5776 17.7272C60.4424 17.575 60.3681 17.3772 60.3681 17.2045C60.3681 16.8858 60.6264 16.6274 60.9452 16.6274C61.2639 16.6274 61.5222 16.8858 61.5222 17.2045Z" fill="white" fill-opacity="0.8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M61.9488 16.6312C61.9488 16.8687 61.6278 17.0613 61.2319 17.0613C60.836 17.0613 60.515 16.8687 60.515 16.6312C60.515 16.3936 60.836 16.201 61.2319 16.201C61.6278 16.201 61.9488 16.3936 61.9488 16.6312Z" fill="white"/>
                <path d="M75.7159 20.5021C75.7159 20.6754 75.6197 20.9474 75.3994 21.1904C75.1769 21.4359 74.9609 21.5093 74.8521 21.5093C74.7629 21.5093 74.5939 21.4555 74.4116 21.2312C74.2299 21.0077 74.1317 20.7243 74.1317 20.5021C74.1317 20.1042 74.4542 19.7816 74.8521 19.7816C75.3553 19.7816 75.7159 20.2039 75.7159 20.5021Z" fill="white" fill-opacity="0.8" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <ellipse cx="74.9955" cy="19.7852" rx="0.716854" ry="0.430112" fill="white"/>
                <path d="M65.9631 21.3949C65.9631 20.9981 64.9711 20.5021 64.6734 20.5021C64.3758 20.5021 63.4223 21.0973 63.3838 21.3949C63.3453 21.6926 64.1774 22.5149 64.475 22.5854C64.7726 22.6559 65.9631 21.7918 65.9631 21.3949Z" fill="white" fill-opacity="0.6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M63.6801 21.3952C63.6801 21.1733 64.6721 20.7999 64.6721 20.7999C64.6721 20.7999 64.2427 21.294 64.2427 21.3952C64.2427 21.6928 64.6721 22.3661 64.6721 22.3661C64.6721 22.3661 63.6801 21.5936 63.6801 21.3952Z" fill="white"/>
            </svg>
        </section>
        <section class="content-box">
            <header class="content-box--head">
                <h2 class="second-title">Mon portfolio</h2>
            </header>
            <!--     project list       -->
            <?php
            $limit = 12;
            $args = ["post_type" => 'portfolio', "fields" => "post_title", "numberposts" => $limit];

            $projects = new WP_Query($args);
            ?>
            <?php get_template_part("template-parts/project-list", null, ['query' => $projects]) ?>
            <footer class="content-box--footer">
                <a href="#header">
                    <svg width="29" height="39" viewBox="0 0 29 39" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5 5L12.7611 4.01198L14.5 0.951493L16.2389 4.01198L14.5 5ZM3.73891 27.988C3.19324 28.9484 1.97235 29.2846 1.01198 28.7389C0.0516032 28.1932 -0.284582 26.9724 0.261086 26.012L3.73891 27.988ZM28.7389 26.012C29.2846 26.9724 28.9484 28.1932 27.988 28.7389C27.0276 29.2846 25.8068 28.9484 25.2611 27.988L28.7389 26.012ZM16.2389 5.98802L3.73891 27.988L0.261086 26.012L12.7611 4.01198L16.2389 5.98802ZM25.2611 27.988L12.7611 5.98802L16.2389 4.01198L28.7389 26.012L25.2611 27.988Z" fill="black"/>
                        <path d="M14.5 22L12.76 21.014L14.5 17.9433L16.24 21.014L14.5 22ZM7.74004 37.986C7.19548 38.947 5.97497 39.2846 5.01397 38.74C4.05297 38.1955 3.71539 36.975 4.25996 36.014L7.74004 37.986ZM24.74 36.014C25.2846 36.975 24.947 38.1955 23.986 38.74C23.025 39.2846 21.8045 38.947 21.26 37.986L24.74 36.014ZM16.24 22.986L7.74004 37.986L4.25996 36.014L12.76 21.014L16.24 22.986ZM21.26 37.986L12.76 22.986L16.24 21.014L24.74 36.014L21.26 37.986Z" fill="black"/>
                    </svg>
                </a>

            </footer>
        </section>


<?php
get_footer();
