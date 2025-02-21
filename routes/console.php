<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Schedule::command('clients:update-status')->everySecond();

// $expiresAt = $client->subscription_expired_date;
// $expiresAt = \Carbon\Carbon::parse($expiresAt);
// $expiresAt->addMonths(duration);
// $client->update(['subscription_expired_date' => $expiresAt]);
