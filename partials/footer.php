<?php require_once __DIR__ . '/../config.php'; ?>
<footer class="footer">
    <div class="footer__grid">
        <div>
            <h4>Express Yazılım</h4>
            <p>WhatsApp, Gmail ve Telegram için profesyonel otomasyon çözümleri.</p>
            <a class="link" href="<?= htmlspecialchars($site['wa_link'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">
                <i class="fa-brands fa-whatsapp"></i> WhatsApp Destek
            </a>
        </div>
        <div>
            <h5>Bağlantılar</h5>
            <a href="#products">Ürünler</a>
            <a href="#pricing">Fiyatlar</a>
            <a href="#blog">Blog</a>
            <a href="#faq">SSS</a>
        </div>
        <div>
            <h5>Hızlı Erişim</h5>
            <a href="privacy.html">Gizlilik Politikası</a>
            <a href="kullanim-kosullari.html">Kullanım Koşulları</a>
            <a href="mailto:info@expressyazilim.com.tr">info@expressyazilim.com.tr</a>
            <a href="<?= htmlspecialchars($site['wa_link'], ENT_QUOTES, 'UTF-8'); ?>" target="_blank" rel="noopener">+90 507 704 85 56</a>
        </div>
    </div>
    <div class="footer__bottom">
        <p>© 2025 EXPRESS Yazılım</p>
        <div class="footer__social">
            <a href="https://www.facebook.com/ExpressYazilim" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/ExpressYazilim" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://twitter.com/ExpressYazilim" aria-label="Twitter"><i class="fa-brands fa-twitter"></i></a>
        </div>
    </div>
</footer>

<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="cart.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>

