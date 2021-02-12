<?php
get_header();
?>
    <main class="site-main vertical-box">
        <h1 class="second-title">
            <?= get_the_title()?>
        </h1>
        <?php get_template_part('template-parts/contact-form') ?>
        <span class="circle-decorator bottom-right-decorator"></span>
        <span class="circle-decorator circle-decorator-rotate-90 bottom-left-decorator"></span>
    </main>


<?php
get_footer();

