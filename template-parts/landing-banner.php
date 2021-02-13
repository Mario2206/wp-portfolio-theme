<div id="landingFadeOut"></div>
<section class="landing-banner">
    <span class="circle-decorator circle-decorator-light bottom-left-decorator"></span>
    <span class="circle-decorator circle-decorator-light bottom-right-decorator circle-decorator-rotate-180"></span>
    <div class="landing-banner--content">
        <?php foreach ($args["words"] as $k => $word): ?>
            <p class="landing-banner--item" style="animation-delay: <?= $k * 5 ?>s" ><?= $word ?></p>
        <?php endforeach; ?>
    </div>
    <footer class="landing-banner--footer">
        <button class="landing-banner--footer-btn">
            Cliquez pour entrer
        </button>
    </footer>
</section>