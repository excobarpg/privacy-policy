<?php
require_once __DIR__ . '/config.php';
$pageTitle = 'Express Yazılım | WhatsApp, Gmail, Telegram Otomasyon Çözümleri';
$pageDescription = 'Express Yazılım çözümleriyle WhatsApp Express, Mail Express ve ReactExpress üzerinden WhatsApp, Telegram ve Gmail’de toplu mesaj, otomasyon ve raporlama yönetimini keşfedin.';
$pageCanonical = 'https://expressyazilim.com.tr/';
include __DIR__ . '/partials/head.php';
include __DIR__ . '/partials/header.php';
?>

<main id="hero" class="section hero">
    <div>
        <div class="hero__eyebrow">
            <i class="fa-solid fa-bolt-lightning"></i>
            Otomasyonda yeni seviye
        </div>
        <h1 class="hero__headline"><?= htmlspecialchars($site['hero']['headline'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <p class="hero__lead"><?= htmlspecialchars($site['hero']['subheadline'], ENT_QUOTES, 'UTF-8'); ?></p>

        <div class="pill-group">
            <?php foreach ($site['features'] as $feature): ?>
                <span class="pill"><?= htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8'); ?></span>
            <?php endforeach; ?>
        </div>

        <div class="cta-row" style="margin-top:18px;">
            <a class="btn btn--primary glow" href="<?= htmlspecialchars($site['hero']['primary_cta']['href'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($site['hero']['primary_cta']['label'], ENT_QUOTES, 'UTF-8'); ?></a>
            <a class="btn btn--ghost" href="<?= htmlspecialchars($site['hero']['secondary_cta']['href'], ENT_QUOTES, 'UTF-8'); ?>"><?= htmlspecialchars($site['hero']['secondary_cta']['label'], ENT_QUOTES, 'UTF-8'); ?></a>
            <a class="btn btn--ghost" href="<?= htmlspecialchars($site['wa_link'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">WhatsApp Destek</a>
        </div>

        <div class="hero__stats">
            <?php foreach ($site['hero']['stats'] as $stat): ?>
                <div class="stat glass reveal">
                    <strong><?= htmlspecialchars($stat['value'], ENT_QUOTES, 'UTF-8'); ?></strong>
                    <span><?= htmlspecialchars($stat['label'], ENT_QUOTES, 'UTF-8'); ?></span>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="media-frame reveal">
        <img src="images/hero.webp" alt="Express Yazılım ürün vitrini">
    </div>
</main>

<section id="features" class="section section--lines">
    <h2 class="section__title">Neden Express Yazılım?</h2>
    <p class="section__subtitle">WhatsApp, Gmail ve Telegram’da profesyonel otomasyon çözümleriyle büyümeyi hızlandırın.</p>
    <div class="feature-grid">
        <?php foreach ($site['features'] as $feature): ?>
            <div class="feature glass reveal tilt">
                <div class="badge badge--alt"><i class="fa-solid fa-sparkles"></i> Özellik</div>
                <h3><?= htmlspecialchars($feature['title'], ENT_QUOTES, 'UTF-8'); ?></h3>
                <p><?= htmlspecialchars($feature['desc'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="products" class="section">
    <h2 class="section__title">Ürün Özellikleri</h2>
    <p class="section__subtitle">Chrome eklentilerinden Windows uygulamalarına kadar tüm otomasyon araçları tek çatı altında.</p>
    <div class="product-grid">
        <?php foreach ($site['products'] as $product): ?>
            <div class="product glass reveal tilt">
                <?php if (!empty($product['badge'])): ?>
                    <div class="badge"><?= htmlspecialchars($product['badge'], ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>
                <div class="product__media">
                    <img src="<?= htmlspecialchars($product['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?>">
                </div>
                <div class="tag"><?= htmlspecialchars($product['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                <?php if (!empty($product['subtitle'])): ?>
                    <p class="hero__lead" style="margin-top:10px;"><?= htmlspecialchars($product['subtitle'], ENT_QUOTES, 'UTF-8'); ?></p>
                <?php endif; ?>
                <ul class="product__list">
                    <?php foreach ($product['bullets'] as $bullet): ?>
                        <li><?= htmlspecialchars($bullet, ENT_QUOTES, 'UTF-8'); ?></li>
                    <?php endforeach; ?>
                </ul>
                <div class="cta-row" style="margin-top:14px;">
                    <a class="btn btn--primary glow" href="<?= htmlspecialchars($product['cta']['href'], ENT_QUOTES, 'UTF-8'); ?>" target="<?= htmlspecialchars($product['cta']['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" rel="noopener">
                        <i class="fa-solid fa-arrow-up-right-from-square"></i>
                        <?= htmlspecialchars($product['cta']['label'], ENT_QUOTES, 'UTF-8'); ?>
                    </a>
                    <?php if (!empty($product['secondary_cta'])): ?>
                        <a class="btn btn--ghost" href="<?= htmlspecialchars($product['secondary_cta']['href'], ENT_QUOTES, 'UTF-8'); ?>" target="<?= htmlspecialchars($product['secondary_cta']['target'] ?? '_self', ENT_QUOTES, 'UTF-8'); ?>" rel="noopener">
                            <?= htmlspecialchars($product['secondary_cta']['label'], ENT_QUOTES, 'UTF-8'); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <?php if (!empty($product['video'])): ?>
                    <a class="link" style="margin-top:10px; display:inline-flex; gap:8px; align-items:center;" href="<?= htmlspecialchars($product['video'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                        <i class="fa-brands fa-youtube"></i> Nasıl Çalışıyor?
                    </a>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="pricing" class="section section--lines">
    <h2 class="section__title">Fiyatlar</h2>
    <p class="section__subtitle">Ömürlük lisans seçenekleri ve aylık paketlerle esnek fiyatlandırma.</p>
    <div class="pricing-grid">
        <?php foreach ($site['pricing'] as $price): ?>
            <div class="pricing glass reveal tilt">
                <div class="tag"><?= htmlspecialchars($price['name'], ENT_QUOTES, 'UTF-8'); ?></div>
                <?php if (!empty($price['old_price'])): ?>
                    <div class="price price--old"><?= htmlspecialchars($price['old_price'], ENT_QUOTES, 'UTF-8'); ?></div>
                <?php endif; ?>
                <div class="price"><?= htmlspecialchars($price['new_price'], ENT_QUOTES, 'UTF-8'); ?></div>
                <select class="product-variant" data-product="<?= htmlspecialchars($price['product_id'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?php foreach ($price['options'] as $opt): ?>
                        <option value="<?= htmlspecialchars($opt['value'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-price="<?= htmlspecialchars($opt['price'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-price-value="<?= htmlspecialchars($opt['price'], ENT_QUOTES, 'UTF-8'); ?>"
                                data-currency="<?= htmlspecialchars($opt['currency'], ENT_QUOTES, 'UTF-8'); ?>">
                            <?= htmlspecialchars($opt['label'], ENT_QUOTES, 'UTF-8'); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <div class="price" data-price="<?= htmlspecialchars($price['options'][0]['price'], ENT_QUOTES, 'UTF-8'); ?>" data-currency="<?= htmlspecialchars($price['options'][0]['currency'], ENT_QUOTES, 'UTF-8'); ?>">
                    <?= htmlspecialchars($price['options'][0]['label'], ENT_QUOTES, 'UTF-8'); ?>
                </div>
                <button class="btn btn--primary add-to-cart" data-product-id="<?= htmlspecialchars($price['product_id'], ENT_QUOTES, 'UTF-8'); ?>" data-product-name="<?= htmlspecialchars($price['name'], ENT_QUOTES, 'UTF-8'); ?>">
                    <i class="fa-solid fa-cart-plus"></i> Sepete Ekle
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section id="blog" class="section">
    <h2 class="section__title">Son Blog Yazıları</h2>
    <p class="section__subtitle">Toplu mesaj gönderimi, Gmail limitleri ve Telegram otomasyonları hakkında güncel içerikler.</p>
    <div class="blog-grid">
        <?php foreach ($site['blogs'] as $blog): ?>
            <article class="blog-card glass reveal tilt">
                <img src="<?= htmlspecialchars($blog['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?= htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?>">
                <h4><?= htmlspecialchars($blog['title'], ENT_QUOTES, 'UTF-8'); ?></h4>
                <p><?= htmlspecialchars($blog['excerpt'], ENT_QUOTES, 'UTF-8'); ?></p>
                <a class="btn btn--ghost" href="<?= htmlspecialchars($blog['href'], ENT_QUOTES, 'UTF-8'); ?>">Devamını Oku</a>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section id="faq" class="section section--lines">
    <h2 class="section__title">Sık Sorulan Sorular</h2>
    <div class="faq-grid">
        <?php foreach ($site['faqs'] as $faq): ?>
            <div class="faq glass reveal">
                <h4><?= htmlspecialchars($faq['q'], ENT_QUOTES, 'UTF-8'); ?></h4>
                <p><?= htmlspecialchars($faq['a'], ENT_QUOTES, 'UTF-8'); ?></p>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="section">
    <div class="glass" style="padding:28px; display:flex; align-items:center; justify-content:space-between; gap:18px; flex-wrap:wrap;">
        <div>
            <h3 style="margin:0;">Hemen Başlayın</h3>
            <p style="margin:6px 0 0;">Özel indirim ve demo için bizimle iletişime geçin.</p>
        </div>
        <div class="cta-row">
            <a class="btn btn--primary glow" href="<?= htmlspecialchars($site['wa_link'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> WhatsApp</a>
            <a class="btn btn--ghost" href="mailto:info@expressyazilim.com.tr">E‑posta Gönder</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/partials/footer.php'; ?>

