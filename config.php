<?php

// Site wide content configuration to keep data centralized and reusable.
$site = [
    'name' => 'Express Yazılım',
    'phone' => '+905077048556',
    'wa_link' => 'https://wa.me/905077048556',
    'hero' => [
        'headline' => 'İletişimin Geleceği Burada',
        'subheadline' => 'WhatsApp, Gmail ve Telegram\'da profesyonel otomasyon çözümleriyle işletmenizi büyütün.',
        'stats' => [
            ['label' => 'Aktif Kullanıcı', 'value' => '1K+'],
            ['label' => 'Gönderilen Mesaj', 'value' => '1M+'],
            ['label' => 'Başarı Oranı', 'value' => '85%'],
        ],
        'primary_cta' => [
            'label' => 'Hemen Başla',
            'href' => '#products',
        ],
        'secondary_cta' => [
            'label' => 'Ürünleri İncele',
            'href' => '#pricing',
        ],
    ],
    'features' => [
        [
            'title' => 'Hızlı Toplu Gönderim',
            'desc' => 'Tek tıkla binlerce WhatsApp mesajı ve e‑posta gönderin.',
        ],
        [
            'title' => 'Kişiselleştirilmiş İçerik',
            'desc' => 'İsim, şirket ve dinamik alanlarla mesajlarınızı özel hâle getirin.',
        ],
        [
            'title' => 'Kontrol Sizde',
            'desc' => 'Gönderim sürecini duraklatın, devam ettirin ve adım adım izleyin.',
        ],
    ],
    'products' => [
        [
            'id' => 'whatsapp-express-chrome',
            'name' => 'WhatsApp Express Chrome',
            'image' => 'images/wp.webp',
            'video' => 'https://www.youtube.com/embed/ZeHE2UBV52c',
            'cta' => [
                'label' => 'Tarayıcıya Ekle',
                'href' => 'https://chromewebstore.google.com/detail/bulk-message-sender-and-s/npgnncfhcfddoepgkannmpoegohbceam',
                'target' => '_blank',
            ],
            'bullets' => [
                'Binlerce kişiye sırayla otomatik mesaj gönderimi',
                'Excel veya kopyala‑yapıştır yöntemiyle hızlı kişi içe aktırma',
                'Alıcılara isimleriyle hitap eden kişiselleştirme',
                'Detaylı gönderim raporları ve istatistikler',
                'Gönderim aralığı & zamanlama kontrolü',
                'Duraklat ve kaldığı yerden devam et',
            ],
        ],
        [
            'id' => 'mail-express-chrome',
            'name' => 'Mail Express Chrome',
            'image' => 'images/mail.webp',
            'video' => 'https://www.youtube.com/embed/iqPkjtYOWJI',
            'cta' => [
                'label' => 'Tarayıcıya Ekle',
                'href' => 'https://chromewebstore.google.com/detail/mail-express-%E2%80%93-bulk-email/fgkekpliiklpbfaiafljpddehcjocoba',
                'target' => '_blank',
            ],
            'bullets' => [
                'Excel\'den içe aktarılan kişilere toplu e‑posta',
                'İsimle hitap eden tam kişiselleştirme',
                'Zamanlanmış gönderim & duraklatma',
                'Başarı/başarısızlık raporlaması',
                'Gmail arayüzünde doğal otomasyon',
            ],
        ],
        [
            'id' => 'whatsapp-express-windows',
            'name' => 'WhatsApp Express Windows',
            'image' => 'images/wp2.webp',
            'video' => 'https://www.youtube.com/embed/SbisJBb1VlM',
            'cta' => [
                'label' => 'Programı İndir',
                'href' => 'download/whatsapp-express-windows/',
                'target' => '_blank',
            ],
            'badge' => '24 SAATLİK DENEME SÜRÜMÜ ÜCRETSİZ',
            'bullets' => [
                'Güvenli & stabil masaüstü gönderim',
                '20 farklı mesaj kutusu → spam riskine son',
                'Resim/dosya ekleme desteği',
                'Kişiselleştirilmiş hitap (NAME etiketi)',
                'Detaylı rapor takibi',
                'Ömür boyu lisans – gizli ücret yok',
            ],
        ],
        [
            'id' => 'mail-express-windows',
            'name' => 'Mail Express Windows',
            'image' => 'images/mail2.webp',
            'video' => 'https://www.youtube.com/embed/pwSx-qkIrKc',
            'cta' => [
                'label' => 'Programı İndir',
                'href' => 'download/mail-express-windows/',
                'target' => '_blank',
            ],
            'secondary_cta' => [
                'label' => 'Download English',
                'href' => 'download/Mail-Express-English/',
                'target' => '_blank',
            ],
            'badge' => '24 SAATLİK DENEME SÜRÜMÜ ÜCRETSİZ',
            'bullets' => [
                'Resimli gönderim desteği',
                'Çoklu hesap desteği',
                'Excel’den toplu e‑posta',
                'Alıcı isimleri ile %100 kişiselleştirme',
                'Esnek zamanlama, duraklat & devam et',
                'Anlık raporlar',
                'Gmail arayüzünde doğal otomasyon',
                'Ömür boyu lisans',
            ],
        ],
        [
            'id' => 'reactexpress',
            'name' => 'ReactExpress',
            'image' => 'images/reactexpress.webp',
            'video' => 'https://www.youtube.com/watch?v=k9e0GhTL5f4',
            'cta' => [
                'label' => 'Programı İndir',
                'href' => 'download/reactexpress/',
                'target' => '_blank',
            ],
            'badge' => '24 SAATLİK DENEME SÜRÜMÜ ÜCRETSİZ',
            'subtitle' => 'Telegram\'da Gücünüzü Katlayın',
            'bullets' => [
                'Gizli ve açık gruplardan hızlı üye çekme',
                'Çekilen üyeleri hedef gruplara otomatik ekleme',
                'Yönetici gönderilerine sıralı reaksiyon',
                'Çoklu hesap yönetimi & görev zamanlama',
                'Kullanımı kolay arayüz',
            ],
        ],
    ],
    'pricing' => [
        [
            'product_id' => 'whatsapp-express-windows',
            'name' => 'WhatsApp Express Windows',
            'old_price' => '25 000 ₺',
            'new_price' => '15 000 ₺',
            'options' => [
                ['label' => 'Ömür Boyu Lisans - 15000₺', 'value' => 'lifetime', 'price' => 15000, 'currency' => 'TRY'],
                ['label' => '1 Aylık Lisans - 1400₺', 'value' => 'monthly-1', 'price' => 1400, 'currency' => 'TRY'],
                ['label' => '3 Aylık Lisans - 2500₺', 'value' => 'monthly-3', 'price' => 2500, 'currency' => 'TRY'],
                ['label' => '6 Aylık Lisans - 4800₺', 'value' => 'monthly-6', 'price' => 4800, 'currency' => 'TRY'],
            ],
        ],
        [
            'product_id' => 'whatsapp-express-chrome',
            'name' => 'WhatsApp Express Chrome',
            'new_price' => '980₺',
            'options' => [
                ['label' => 'Ömür boyu lisans - 980₺', 'value' => 'lifetime', 'price' => 980, 'currency' => 'TRY'],
            ],
        ],
        [
            'product_id' => 'mail-express-chrome',
            'name' => 'Mail Express Chrome',
            'new_price' => '1350₺',
            'options' => [
                ['label' => 'Ömür boyu lisans - 1350₺', 'value' => 'lifetime', 'price' => 1350, 'currency' => 'TRY'],
            ],
        ],
        [
            'product_id' => 'mail-express-windows',
            'name' => 'Mail Express Windows',
            'old_price' => '19 900 ₺',
            'new_price' => '9 900 ₺',
            'options' => [
                ['label' => 'Ömür Boyu Lisans - 9900₺', 'value' => 'lifetime', 'price' => 9900, 'currency' => 'TRY'],
                ['label' => '1 Aylık Lisans - 450₺', 'value' => 'monthly-1', 'price' => 450, 'currency' => 'TRY'],
                ['label' => '3 Aylık Lisans - 800₺', 'value' => 'monthly-3', 'price' => 800, 'currency' => 'TRY'],
                ['label' => '6 Aylık Lisans - 1500₺', 'value' => 'monthly-6', 'price' => 1500, 'currency' => 'TRY'],
            ],
        ],
        [
            'product_id' => 'reactexpress',
            'name' => 'ReactExpress',
            'old_price' => '45 000 ₺',
            'new_price' => '35 000 ₺',
            'options' => [
                ['label' => 'Ömür Boyu Lisans - 35000₺', 'value' => 'lifetime', 'price' => 35000, 'currency' => 'TRY'],
                ['label' => '1 Aylık Lisans - 2400₺', 'value' => 'monthly-1', 'price' => 2400, 'currency' => 'TRY'],
                ['label' => '3 Aylık Lisans - 5000₺', 'value' => 'monthly-3', 'price' => 5000, 'currency' => 'TRY'],
                ['label' => '6 Aylık Lisans - 7500₺', 'value' => 'monthly-6', 'price' => 7500, 'currency' => 'TRY'],
            ],
        ],
    ],
    'faqs' => [
        [
            'q' => 'WhatsApp Express Windows nedir?',
            'a' => 'WhatsApp Express Windows, masaüstü bir uygulamadır ve Web WhatsApp üzerinden otomatik toplu mesaj gönderimi sağlar.',
        ],
        [
            'q' => 'Ömür boyu lisans ne anlama geliyor?',
            'a' => 'Tek seferlik ödeme yaparak ürünü ömür boyu kullanma hakkı elde edersiniz ve tüm güncellemelerden faydalanırsınız.',
        ],
        [
            'q' => 'Mail Express Windows hangi avantajları sunuyor?',
            'a' => 'Çoklu Gmail hesap desteği, esnek zamanlama, anlık raporlar ve görsel ek desteği ile zengin bir otomasyon deneyimi sunar.',
        ],
        [
            'q' => 'ReactExpress nasıl çalışıyor?',
            'a' => 'Telegram gruplarından üye çekme, hedef gruplara ekleme ve yönetici gönderilerine reaksiyon bırakmayı otomatikleştirir.',
        ],
    ],
    'blogs' => [
        [
            'title' => 'WhatsApp Toplu Mesaj Gönderimi Nasıl Yapılır?',
            'excerpt' => 'WhatsApp üzerinden toplu mesaj göndermek için en etkili yöntemler...',
            'href' => 'blog1.php',
            'image' => 'images/wpblog.webp',
        ],
        [
            'title' => 'Telegram\'da Üyeleri Otomatik Çekme Taktikleri',
            'excerpt' => 'Telegram gruplarından otomatik üye çekmenin en iyi yolları...',
            'href' => 'blog2.php',
            'image' => 'images/telegram-blog.webp',
        ],
        [
            'title' => 'Toplu mail Gönderme, Mailde ekler gönderme nasıl yapılır',
            'excerpt' => 'En etkili mail marketing yolları nelerdir...',
            'href' => 'blogTopluMail.php',
            'image' => 'images/gmail-blog.webp',
        ],
    ],
];

