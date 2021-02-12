<?php
get_header();
?>
    <main class="site-main">
        <h1>
            <?= get_the_title()?>
        </h1>
        <?php get_template_part('template-parts/contact-form') ?>
    </main>


<?php
get_footer();

