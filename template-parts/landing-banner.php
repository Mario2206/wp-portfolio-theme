<section class="landing-banner">
    <div class="landing-banner--content">
        <?php foreach ($args["words"] as $word): ?>
            <p class="landing-banner--item"><?= $word ?></p>
        <?php endforeach; ?>
    </div>
    <footer class="landing-banner--footer">
        <button class="landing-banner--footer-btn">
            Cliquez pour entrer
        </button>
    </footer>
</section>