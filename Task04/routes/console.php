<?php

use WebUser\Foundation\Inspiring;
use WebUser\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');
