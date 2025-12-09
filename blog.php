<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Blog | Express Yazılım';
$pageDescription = 'WhatsApp, Telegram ve E-posta toplu mesaj gönderimi hakkında güncel bilgiler ve ipuçları.';
$pageCanonical = 'https://expressyazilim.com.tr/blog';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

<main>
    <section class="page-hero glass">
        <div class="grid-overlay"></div>
        <h1 class="page-hero__title">Express Yazılım Blog</h1>
        <p class="page-hero__subtitle">Toplu mesaj gönderimi, otomasyon ve kampanya optimizasyonu için uygulamaya dönük rehberler.</p>
        <div class="meta-badges">
            <span class="meta-badge"><i class="fa-brands fa-whatsapp"></i> WhatsApp</span>
            <span class="meta-badge"><i class="fa-brands fa-telegram"></i> Telegram</span>
            <span class="meta-badge"><i class="fa-solid fa-envelope"></i> Gmail / E-posta</span>
        </div>
    </section>

    <section class="section" aria-label="Blog kartları">
        <div class="blog-grid">
            <?php foreach ($site['blogs'] as $index => $blog): ?>
                <article class="blog-card glass reveal tilt <?= $index === 0 ? 'blog-card--wide' : ''; ?>">
                    <img src="<?= htmlspecialchars($blog['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?>">
                    <h4><?= htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                    <p><?= htmlspecialchars($blog['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                    <div class="blog-card__meta">
                        <span><i class="fa-regular fa-clock"></i> 4 dk okuma</span>
                        <span><i class="fa-solid fa-sparkles"></i> Güncel</span>
                    </div>
                    <a class="btn btn--primary glow" href="<?= htmlspecialchars($blog['href'], ENT_QUOTES, 'UTF-8'); ?>">Devamını Oku</a>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<?php include __DIR__ . '/partials/footer.php'; ?>

