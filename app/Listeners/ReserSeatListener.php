<?php

namespace App\Listeners;

use App\Events\reserveSeat;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class ReserSeatListener implements ShouldQueue
{
    use InteractsWithQueue;
    /**
     * Create the event listener.
     */
    public function __construct()
    {
    }

    /**
     * Handle the event.
     * @param \App\Events\reserveSeat $event
     */
    public function handle(reserveSeat $event): void
    {
        $ShowSeat = $event->ShowSeat;
        Log::info('Ticket updated: ' . $ShowSeat);
    }
}
