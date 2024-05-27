<?php

namespace App\Jobs;

use App\Models\ShowSeat;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class DeleteBooking implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    protected $booking;
    public function __construct($booking)
    {
        //
        $this->booking = $booking;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        if ($this->booking->Status == "Chưa thanh toán") {
            $ShowSeat = ShowSeat::where('BookingID', '=', $this->booking->BookingID)->get();
            foreach ($ShowSeat as $s) {
                $s->delete();
            }
            $this->booking->delete();
        }
    }
}
