<article class="portfolio">
    <header class="portfolio-head"> 
        <h1><?= the_title() ?></h1>
        <p><?= get_field('client'); ?></p>
    </header>
    <div class="portfolio-content" style="border-color:<?= get_field('border_color') ?>">
        <?= the_content()  ?>
    </div>
</article>