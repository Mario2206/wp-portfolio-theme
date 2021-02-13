<?php
get_header();

$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$args = array(
    'post_type' => 'portfolio',
    'tax_query' => array(
        array(
            'taxonomy' => 'technology',

            'terms'    => $term,
        ),
    ),
);
$query = new WP_Query($args);
?>

<main class="site-main content-box ">
    <span class="circle-decorator"></span>
    <span class="circle-decorator top-right-decorator circle-decorator-rotate-90"></span>
    <h1 class="second-title content-box--head"><?= $term->description ? $term->description : $term->name ?></h1>
    <?php
        get_template_part('template-parts/project-list', null,  compact("query"));
    ?>
</main>



<?php
get_footer();