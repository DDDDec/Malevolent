<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Schedule::job(new \App\Jobs\Server\Servers)->everyFiveMinutes();
