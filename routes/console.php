<?php

use Illuminate\Foundation\Inspiring;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('seed-job', function () {
    \App\Jobs\MainJob::dispatch();

    $this->info('Done');
})->describe('Seed 1 job of type MainJob');
