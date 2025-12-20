<?php
require_once __DIR__ . '/../config.php';

$title = $pageTitle ?? 'Express Yazılım | WhatsApp, Gmail, Telegram Otomasyon Çözümleri';
$description = $pageDescription ?? 'WhatsApp Express, Mail Express ve ReactExpress ile toplu mesaj, otomasyon ve raporlama çözümlerini keşfedin.';
$canonical = $pageCanonical ?? 'https://expressyazilim.com.tr/';
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="icon" type="image/png" href="images/favicon.webp">

    <!-- Open Graph -->
    <meta property="og:site_name" content="Express Yazılım">
    <meta property="og:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:type" content="website">
    <meta property="og:image" content="https://expressyazilim.com.tr/images/seo-gorsel.jpg">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="https://expressyazilim.com.tr/images/seo-gorsel.jpg">

    <!-- Fonts & Icons -->
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@400;500;600;700&family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Styles -->
    <link rel="stylesheet" href="assets/css/app.css">
</head>

