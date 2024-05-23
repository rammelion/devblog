<?php

use App\Jobs\UpdatePublished;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
 
Schedule::job(new UpdatePublished)->everyMinute();


