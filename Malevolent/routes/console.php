<?php

Schedule::job(new \App\Jobs\View\Homepage\Servers)->everyFiveMinutes();
Schedule::job(new \App\Jobs\View\Homepage\ServerStatistics)->everyFiveMinutes();
