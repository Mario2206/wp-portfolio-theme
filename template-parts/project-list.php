<section class="project-card--wrapper project-card--wrapper-anim">
    <?php


      if ($args['query']->have_posts()) :
          $count = 0;
        while ($args['query']->have_posts()) :
            $count++;
            $args['query']->the_post();
    ?>
        <a href="<?= get_permalink() ?>">
            <article class="project-card " style="animation-delay: <?= $count * 0.1?>s">
               <?php the_post_thumbnail("post-thumbnail", ["class" => "project-card--thumbnail"]) ?>
                <div class="project-card--bg"></div>
                <h3 class="project-card--title"><?= the_title() ?></h3>
            </article>
        </a>


    <?php
        endwhile;
      endif;
    ?>
</section>