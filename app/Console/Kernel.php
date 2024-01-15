<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Laravel\Horizon\Console\HorizonCommand;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        HorizonCommand::class,
    ];

    protected function schedule(Schedule $schedule)
    {
    }

    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
