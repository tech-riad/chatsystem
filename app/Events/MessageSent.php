<?php

namespace App\Events;

use App\Models\Chat\Message;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MessageSent implements ShouldBroadcastNow
{
    use Dispatchable, SerializesModels;

    public Message $message;

    public function __construct(Message $message)
    {
        $this->message = $message->load('sender');
    }

    public function broadcastOn(): array
    {
        return [
            new PrivateChannel(
                'chat.' . $this->message->group_id
            ),
        ];
    }

    public function broadcastAs(): string
    {
        return 'message.sent';
    }

    public function broadcastWith(): array
    {
        return [

            'id' => $this->message->id,

            'group_id' => $this->message->group_id,

            'text' => $this->message->message,

            'sender' => $this->message->sender->name,

            'sender_id' => $this->message->user_id,

            'time' => $this->message->created_at->format('h:i A'),

        ];
    }
}
