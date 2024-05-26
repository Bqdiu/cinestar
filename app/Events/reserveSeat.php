<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class reserveSeat implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * Create a new event instance.
     */
    public $ShowSeat;
    public function __construct($ShowSeat)
    {
        //
        $this->ShowSeat = $ShowSeat;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
    public function broadcastOn(): array
    {
        return [
            new Channel('Reserve'),
        ];
    }
    /**
     * Broadcast event name.
     *
     * @return string
     */
    public function broadcastAs()
    {
        return 'reserveSeat';
    }

    /**
     * Broadcast event data.
     *
     * @return array
     */
    public function broadcastWith()
    {
        return [
            'ShowSeat' => $this->ShowSeat,
        ];
    }
}
