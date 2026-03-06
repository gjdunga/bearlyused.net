<?php
declare(strict_types=1);

/**
 * Determines whether a given date is an open business day.
 * Open days: Tue-Fri of every other week, anchored to SCHEDULE_ANCHOR.
 */
function is_open_day(DateTimeImmutable $date): bool {
    $dow = (int) $date->format('N'); // 1=Mon ... 7=Sun
    // Open days are Tue(2), Wed(3), Thu(4), Fri(5)
    if ($dow < 2 || $dow > 5) {
        return false;
    }
    // Find the Tuesday of this date's week (ISO week: Mon=1)
    $tuesday = $date->modify('monday this week')->modify('+1 day');
    $anchor   = new DateTimeImmutable(SCHEDULE_ANCHOR);
    $anchor   = $anchor->setTime(0, 0, 0);
    $tuesday  = $tuesday->setTime(0, 0, 0);
    $diff     = (int) $anchor->diff($tuesday)->days;
    // If anchor is after tuesday, diff would be negative in days
    // Use timestamp comparison
    $diff_signed = (int) (($tuesday->getTimestamp() - $anchor->getTimestamp()) / 86400);
    if ($diff_signed < 0) {
        // Before anchor: check if ($diff_signed % 14 === 0)
        return ($diff_signed % SCHEDULE_INTERVAL_DAYS === 0);
    }
    return ($diff_signed % SCHEDULE_INTERVAL_DAYS === 0);
}

/**
 * Renders a single calendar month as HTML.
 */
function render_calendar_month(int $year, int $month): string {
    $today      = new DateTimeImmutable('today');
    $month_name = (new DateTimeImmutable("{$year}-{$month}-01"))->format('F Y');
    $first_day  = new DateTimeImmutable("{$year}-{$month}-01");
    $days_in_month = (int) $first_day->format('t');
    // 0=Sun, need to offset for Sun-start grid
    $start_dow  = (int) $first_day->format('w');

    $html = '<div class="cal-month">';
    $html .= '<div class="cal-month-header">' . htmlspecialchars($month_name) . '</div>';
    $html .= '<div class="cal-dow">';
    foreach (['Su','Mo','Tu','We','Th','Fr','Sa'] as $d) {
        $html .= '<span>' . $d . '</span>';
    }
    $html .= '</div>';
    $html .= '<div class="cal-days">';

    // Empty leading cells
    for ($i = 0; $i < $start_dow; $i++) {
        $html .= '<div class="cal-day empty"></div>';
    }

    for ($d = 1; $d <= $days_in_month; $d++) {
        $date    = new DateTimeImmutable("{$year}-{$month}-{$d}");
        $open    = is_open_day($date);
        $is_today = $date->format('Y-m-d') === $today->format('Y-m-d');
        $classes = 'cal-day';
        $classes .= $open ? ' open' : ' closed';
        if ($is_today) $classes .= ' today';
        $title = $open
            ? 'Open: ' . SCHEDULE_OPEN_TIME . ' - ' . SCHEDULE_CLOSE_TIME
            : 'Closed';
        $html .= '<div class="' . $classes . '" title="' . $title . '">' . $d . '</div>';
    }

    $html .= '</div></div>';
    return $html;
}

/**
 * Renders N months of calendar starting from a given month.
 */
function render_calendar(int $months = 3): string {
    $now  = new DateTimeImmutable('today');
    $html = '<div class="calendar-grid" id="calendarGrid">';
    for ($i = 0; $i < $months; $i++) {
        $ts    = strtotime("+{$i} month", $now->getTimestamp());
        $year  = (int) date('Y', $ts);
        $month = (int) date('n', $ts);
        $html .= render_calendar_month($year, $month);
    }
    $html .= '</div>';
    return $html;
}
