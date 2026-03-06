<?php declare(strict_types=1); ?>

<footer class="site-footer" id="location">
  <div class="footer-inner">
    <div class="footer-grid">

      <div class="footer-brand">
        <div class="footer-logo">
          <span aria-hidden="true">🐻</span> <?= SITE_NAME ?>
        </div>
        <p>Florence's locally owned tire shop. Mounting, balancing, flats fixed, and a solid selection of new and used tires at prices that respect your budget.</p>
      </div>

      <div class="footer-col">
        <h4>Hours</h4>
        <ul>
          <li>Tue &ndash; Fri <strong>9 AM to 5 PM</strong></li>
          <li>Sat, Sun, Mon <strong>Closed</strong></li>
          <li class="footer-note">Every other week &mdash; check schedule above</li>
        </ul>
      </div>

      <div class="footer-col">
        <h4>Find Us</h4>
        <ul>
          <li><strong><?= SITE_ADDRESS ?></strong></li>
          <li><?= SITE_CITY ?></li>
          <li class="footer-phone"><a href="tel:<?= SITE_PHONE_RAW ?>"><?= SITE_PHONE ?></a></li>
        </ul>
      </div>

    </div>

    <div class="footer-bottom">
      <span>&copy; <?= date('Y') ?> <?= SITE_NAME ?> &mdash; Florence, Colorado</span>
      <span class="footer-verse">Matthew 6:33</span>
    </div>
  </div>
</footer>

<script src="<?= ASSETS ?>/js/main.js" defer></script>
</body>
</html>
