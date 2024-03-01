<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class SendNotification implements ShouldQueue
{
    public function handle($event)
    {
        // Send data to notifications service through message broker
        // For simplicity, log it here
        Log::info('Notification sent: ' . json_encode($event));
    }
}

