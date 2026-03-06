<?php
declare(strict_types=1);

// Site identity
define('SITE_NAME', 'Bearly Used & New Tires');
define('SITE_TAGLINE', 'Florence, Colorado\'s Local Tire Shop');
define('SITE_URL', 'https://bearlyused.net');
define('SITE_PHONE', '(719) 784-0400');
define('SITE_PHONE_RAW', '7197840400');
define('SITE_ADDRESS', '233 E Main St');
define('SITE_CITY', 'Florence, CO 81226');
define('SITE_EMAIL', '');

// Schedule: open every other week, Tue-Fri, 9am-5pm
// Anchor: the Tuesday of the first known open week
define('SCHEDULE_ANCHOR', '2026-03-10'); // First open Tuesday
define('SCHEDULE_INTERVAL_DAYS', 14);    // Biweekly
define('SCHEDULE_OPEN_DAYS', [2, 3, 4, 5]); // Tue=2, Wed=3, Thu=4, Fri=5
define('SCHEDULE_OPEN_TIME', '9:00 AM');
define('SCHEDULE_CLOSE_TIME', '5:00 PM');

// Assets path (relative)
define('ASSETS', '/assets');
