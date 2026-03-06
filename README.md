# bearlyused.net

Website for **Bearly Used & New Tires**, Florence, CO.

## Stack

- PHP 8.1+
- Apache with mod_rewrite
- Vanilla CSS (mobile-first responsive)
- Vanilla JS (no dependencies)
- Hosted on Ubuntu 24.04

## Structure

```
index.php               Main homepage
includes/
  config.php            Site constants and schedule config
  calendar.php          Biweekly schedule calendar generator
  header.php            HTML head + sticky nav (hamburger on mobile)
  footer.php            Footer + script tags
assets/
  css/style.css         Full responsive stylesheet
  js/main.js            Hamburger nav, scroll-active links
  images/
    mural.jpg           Building mural photo
    sign.jpg            Shop sign photo
.htaccess               Apache config, clean URLs, security headers
```

## Schedule Logic

The shop is open every other week, Tuesday through Friday, 9 AM to 5 PM.
The anchor open week is March 10, 2026 (Tuesday). The calendar generates
forward from the current month using a 14-day interval from that anchor.

To update the schedule, edit `includes/config.php`:
- `SCHEDULE_ANCHOR` -- the Tuesday of the next known open week
- `SCHEDULE_INTERVAL_DAYS` -- interval between open weeks (default 14)
- `SCHEDULE_OPEN_DAYS` -- day-of-week numbers that are open (Tue=2 through Fri=5)

## Server Requirements

- PHP 8.1+
- Apache 2.4+ with mod_rewrite enabled
- `AllowOverride All` on the document root directory
