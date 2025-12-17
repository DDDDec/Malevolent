<?php

use Illuminate\Support\Facades\Schedule;

use App\Jobs\View\Homepage\Servers;

Schedule::job(new Servers)->everyFiveMinutes();
