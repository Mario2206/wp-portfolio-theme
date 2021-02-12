<article class="portfolio content-box horizontal-box">

    <header class="portfolio-head">
        <div>
            <?php the_post_thumbnail('post-thumbnail', ["class" => "main-miniature"]) ?>
        </div>
    </header>
    <div>
        <div class="content-box--section">
            <h1 class="grass-title"><?= the_title() ?></h1>
            <div class="portfolio-content" >
                <?= the_content()  ?>
            </div>
        </div>

        <?php
        $taxonomies = get_the_terms(get_the_ID(), "technology");

        if($taxonomies) :
            ?>
            <div class="content-box--section">
                <h2 class="grass-title">Technologies du projet</h2>
                <ul class="circle-slider--wrapper-center">
                    <?php

                    foreach ($taxonomies as $taxo) :
                        ?>
                        <li class="circle-slider--items"><?= $taxo->name ?></li>
                    <?php
                    endforeach;
                    ?>
                </ul>

            </div>
        <?php
        endif;
        $projectLink = get_field('project_link');

        if($projectLink):
            ?>
            <div class="content-box--section portfolio-content">
                <h2 class="grass-title">Lien du projet</h2>
                <a href="<?= $projectLink ?>" class="common-link"><?= $projectLink ?></a>
            </div>
        <?php endif; ?>
    </div>


</article>