<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/calendar.php';

$page_title = SITE_NAME . ' | Florence, CO Tire Shop';

require_once __DIR__ . '/includes/header.php';
?>

<!-- ============================================================
     HERO
     ============================================================ -->
<section class="hero">
  <img
    class="hero-img"
    src="<?= ASSETS ?>/images/mural.jpg"
    alt="Bearly Used and New Tires building mural showing black bears in Colorado mountains"
    width="1200"
    height="800"
    loading="eager"
  >
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="hero-content">
    <p class="hero-eyebrow">Florence, Colorado &bull; Heart of Fremont County</p>
    <h1 class="hero-title">
      Your Local<br>
      <span class="accent">Tire Shop</span>
    </h1>
    <p class="hero-sub">New and used tires, mounting, balancing, and flats fixed fast. Serving Florence, Ca&ntilde;on City, Penrose, and the whole valley.</p>
    <div class="hero-actions">
      <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn-primary">Call <?= SITE_PHONE ?></a>
      <a href="#schedule" class="btn-ghost">Check Our Schedule</a>
    </div>
  </div>
</section>

<!-- ============================================================
     PHONE BAND
     ============================================================ -->
<div class="phone-band">
  <div>
    <span class="ph-label">Call During Business Hours</span>
    <a href="tel:<?= SITE_PHONE_RAW ?>" class="ph-number"><?= SITE_PHONE ?></a>
  </div>
  <div class="band-hours">
    <strong>Tuesday &ndash; Friday</strong> &nbsp; 9:00 AM to 5:00 PM<br>
    <span class="band-muted">Every other week &mdash; see schedule below</span>
  </div>
  <div class="band-location">
    <strong><?= SITE_ADDRESS ?></strong>
    <?= SITE_CITY ?>
  </div>
</div>

<!-- ============================================================
     SERVICES
     ============================================================ -->
<section class="services" id="services">
  <div class="section-header">
    <span class="section-label">What We Do</span>
    <h2 class="section-title">Tires. Simple as That.</h2>
    <div class="section-rule"></div>
  </div>
  <div class="services-grid">

    <div class="service-card">
      <span class="service-icon" aria-hidden="true">🔧</span>
      <h3 class="service-name">Mounting &amp; Balancing</h3>
      <p class="service-desc">Professional tire mounting and precision balancing for a smooth ride. We handle passenger cars, trucks, ATVs, and more.</p>
      <span class="service-highlight">Fast Turnaround</span>
    </div>

    <div class="service-card">
      <span class="service-icon" aria-hidden="true">🔴</span>
      <h3 class="service-name">Flats Fixed</h3>
      <p class="service-desc">Puncture repair done right. We assess the damage honestly and fix what can be fixed &mdash; no upsells, no runaround.</p>
      <span class="service-highlight">Honest Assessment</span>
    </div>

    <div class="service-card">
      <span class="service-icon" aria-hidden="true">🏔️</span>
      <h3 class="service-name">New &amp; Used Tires</h3>
      <p class="service-desc">A rotating selection of quality used tires and new tire options at prices that make sense for Colorado mountain living.</p>
      <span class="service-highlight">Affordable Selection</span>
    </div>

  </div>
</section>

<!-- ============================================================
     SCHEDULE / CALENDAR
     ============================================================ -->
<section class="calendar-section" id="schedule">
  <div class="section-header">
    <span class="section-label">Hours &amp; Schedule</span>
    <h2 class="section-title">When We&rsquo;re Open</h2>
    <div class="section-rule"></div>
    <p class="calendar-note">
      Open every other week, Tuesday through Friday,
      <?= SCHEDULE_OPEN_TIME ?> to <?= SCHEDULE_CLOSE_TIME ?>.
      Green days are open days.
    </p>
  </div>

  <?= render_calendar(3) ?>

  <div class="cal-legend">
    <div class="cal-legend-item">
      <div class="legend-dot legend-open"></div>
      Open (Tue&ndash;Fri <?= SCHEDULE_OPEN_TIME ?>&ndash;<?= SCHEDULE_CLOSE_TIME ?>)
    </div>
    <div class="cal-legend-item">
      <div class="legend-dot legend-closed"></div>
      Closed
    </div>
    <div class="cal-legend-item">
      <div class="legend-dot legend-today"></div>
      Today
    </div>
  </div>
</section>

<!-- ============================================================
     WHY US / SIGN SECTION
     ============================================================ -->
<section class="sign-section">
  <div class="sign-photo-wrap">
    <img
      src="<?= ASSETS ?>/images/sign.jpg"
      alt="Bearly Used and New Tires shop sign showing services and phone number"
      width="800"
      height="400"
      loading="lazy"
    >
  </div>
  <div class="sign-copy">
    <span class="section-label">Why Locals Choose Us</span>
    <h2 class="section-title">Straightforward.<br>No Games.</h2>
    <div class="section-rule"></div>
    <p>
      We have been a fixture on Main Street in Florence for years.
      Richard and Leslie Novoa run a shop built on honest work and fair prices &mdash;
      the kind of tire shop where you do not feel like you are being sold
      something you do not need.
    </p>
    <ul class="sign-bullets">
      <li>Locally owned and operated &mdash; not a franchise</li>
      <li>Cheaper than the big chains, consistently</li>
      <li>Friendly, knowledgeable staff</li>
      <li>We service cars, trucks, and ATVs</li>
    </ul>
    <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn-primary">Get in Touch Today</a>
  </div>
</section>

<!-- ============================================================
     ABOUT / MURAL STRIP
     ============================================================ -->
<section class="about-strip" id="about">
  <div class="about-image">
    <img
      src="<?= ASSETS ?>/images/mural.jpg"
      alt="Mural on Bearly Used Tires building by artist Glenn Norberg, two black bears bursting through a wall revealing Colorado mountains"
      width="800"
      height="600"
      loading="lazy"
    >
  </div>
  <div class="about-text">
    <span class="section-label">Our Story</span>
    <h2 class="section-title">The Bears on the Wall</h2>
    <div class="section-rule"></div>
    <p>
      The mural on the west side of our building was painted by local artist Glenn Norberg,
      who got the idea while having his own tires mounted. Two black bears burst through
      the wall, revealing the Colorado mountains behind them &mdash; because real bears
      actually use the wash below as a trail.
    </p>
    <p style="margin-top:14px;">
      That mural is Florence. Unexpected, whimsical, and rooted in this place.
      Just like us.
    </p>
    <div class="faith-badge">
      &ldquo;But seek first the kingdom of God and his righteousness,
      and all these things will be added to you.&rdquo;
      <cite>Matthew 6:33</cite>
    </div>
  </div>
</section>

<!-- ============================================================
     CTA BAR
     ============================================================ -->
<section class="cta-bar">
  <div>
    <h2>Ready to Get Rolling?</h2>
    <p>Check the schedule above and stop by on an open week. No appointment needed for most services.</p>
  </div>
  <a href="tel:<?= SITE_PHONE_RAW ?>" class="btn-white">Call <?= SITE_PHONE ?></a>
</section>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
