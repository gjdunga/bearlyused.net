<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Bearly Used & New Tires - Florence Colorado's local tire shop. New and used tires, mounting, balancing, and flats fixed. Open every other week, Tue-Fri 9am-5pm.">
  <meta name="theme-color" content="#1a2744">
  <title><?= htmlspecialchars($page_title ?? SITE_NAME) ?></title>

  <!-- Preconnect for fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;600;700&family=Libre+Baskerville:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= ASSETS ?>/css/style.css">
</head>
<body>

<!-- TOP BAR -->
<div class="topbar">
  <span class="topbar-addr">
    <svg width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/><circle cx="12" cy="10" r="3"/></svg>
    <?= SITE_ADDRESS ?>, <?= SITE_CITY ?>
  </span>
  <span class="topbar-hours">Every other week: Tue-Fri &nbsp;|&nbsp; 9:00 AM - 5:00 PM</span>
  <a href="tel:<?= SITE_PHONE_RAW ?>" class="topbar-phone"><?= SITE_PHONE ?></a>
</div>

<!-- NAV -->
<nav class="site-nav" role="navigation" aria-label="Main navigation">
  <a href="/" class="nav-logo" aria-label="<?= SITE_NAME ?> home">
    <span class="bear-icon" aria-hidden="true">🐻</span>
    <span class="logo-text">
      <span class="logo-main">Bearly Used &amp; New</span>
      <span class="logo-sub">Tires &mdash; Florence, Colorado</span>
    </span>
  </a>

  <!-- Hamburger button (mobile only) -->
  <button class="nav-hamburger" id="navToggle" aria-expanded="false" aria-controls="navMenu" aria-label="Open menu">
    <span class="ham-bar"></span>
    <span class="ham-bar"></span>
    <span class="ham-bar"></span>
  </button>

  <!-- Nav links -->
  <ul class="nav-links" id="navMenu" role="list">
    <li><a href="#services">Services</a></li>
    <li><a href="#schedule">Schedule</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#location">Location</a></li>
    <li><a href="tel:<?= SITE_PHONE_RAW ?>" class="nav-cta">Call Now</a></li>
  </ul>
</nav>
