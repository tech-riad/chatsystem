<?php

namespace App\Models\Chat;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;
class Message extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid',
        'group_id',
        'user_id',
        'message',
        'type',
        'reply_to',
        'is_edited',
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($message) {
            if (empty($message->uuid)) {
                $message->uuid = (string) Str::uuid();
            }
        });
    }

    protected $casts = [
        'is_edited' => 'boolean',
    ];

    /*
    |--------------------------------------------------------------------------
    | Group
    |--------------------------------------------------------------------------
    */

    public function group()
    {
        return $this->belongsTo(ChatGroup::class, 'group_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Sender
    |--------------------------------------------------------------------------
    */

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /*
    |--------------------------------------------------------------------------
    | Reply Message
    |--------------------------------------------------------------------------
    */

    public function reply()
    {
        return $this->belongsTo(Message::class, 'reply_to');
    }
}
