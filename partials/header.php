<?php require_once __DIR__ . '/../config.php'; ?>
<body class="page">
<div class="bg-grid"></div>
<div class="bg-glow"></div>
<header class="nav-shell">
    <nav class="nav">
        <div class="nav__brand">
            <img src="images/logom.png" alt="Express Yazılım Logo" class="nav__logo">
            <span class="nav__title">Express Yazılım</span>
        </div>
        <button class="nav__toggle" aria-label="Menü">
            <span></span><span></span><span></span>
        </button>
        <div class="nav__links">
            <a href="#hero">Anasayfa</a>
            <a href="#products">Ürünler</a>
            <a href="#pricing">Fiyatlar</a>
            <a href="#blog">Blog</a>
            <a href="#faq">SSS</a>
        </div>
        <div class="nav__actions">
            <a class="btn btn--ghost" href="<?= htmlspecialchars($site['wa_link'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">WhatsApp</a>
            <div class="cart-toggle">
                <i class="fa-solid fa-cart-shopping cart-icon"></i>
                <span class="cart-count">0</span>
            </div>
        </div>
    </nav>
</header>

