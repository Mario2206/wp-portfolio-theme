<section class="project-card-wrapper">
    <?php
      $limit = isset($numberposts)  ? $numberposts : 8;
      $args = ["post_type" => 'portfolio', "fields" => "post_title", "numberposts" => $limit];

      $projects = new WP_Query($args);

      if ($projects->have_posts()) :
        while ($projects->have_posts()) :
            $projects->the_post();
    ?>
        <a href="<?= get_permalink() ?>">
            <article class="project-card">
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