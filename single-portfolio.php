<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Portfolio_Black_&_White
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
			get_template_part( 'template-parts/content', get_post_type() );

		endwhile; // End of the loop.
		?>
        <span class="circle-decorator circle-decorator-rotate-90 top-right-decorator decorator-only-desktop"></span>
        <svg class="desktop-cat decorator-only-desktop" viewBox="0 0 956 468" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M786.943 79.8707C784.461 79.1588 781.048 78.6799 779 80.5C776.754 82.4962 776.744 86.1149 777.15 88.8582C777.431 90.7585 779.546 91.5324 781.119 90.4296C782.748 89.2875 784.673 87.8342 786 86.5C786.747 85.7493 787.542 84.7102 788.224 83.7371C789.233 82.2993 788.631 80.3549 786.943 79.8707Z" fill="white" fill-opacity="0.6" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M798.5 149.5L789 152M789 152C789 152 766.346 154.981 756.5 145.5C743 132.5 747.799 93.7864 768 70.5C782.256 54.0668 817 44 817 44C817 44 808 2 817 2C820.5 2 889.695 33.5941 909 59C928.305 84.4059 931.118 104.08 939 135C957.842 208.909 962 275.5 928 330C907.198 363.344 876.099 378.698 834 389C816.448 393.295 802.411 392.399 788 394C761 397 706.756 414.379 654 424C589.667 435.732 552 442 483 445C440.147 446.863 410.5 466 380 466C335.898 466 302.5 449.5 277 432.5C265.667 424.944 224 429 200.5 423.5C173.923 417.28 131.5 432.5 78.5 427.5C68.748 426.58 52 434 40.5 444C23.5 456 2 460 2 460C2 460 36.1212 398.905 75 383C97 374 154.5 364.896 173.5 364.5C214.778 363.64 246.618 378 271 378C283.07 378 292.83 327.993 316.5 294.5C346.5 263.5 362.5 250.576 383 240.5C442 211.5 524 192.5 599 176C658 163.02 768 184 768 184C770.333 184 774 176 789 152Z" stroke="white" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>


    </main><!-- #main -->

<?php
get_footer();
