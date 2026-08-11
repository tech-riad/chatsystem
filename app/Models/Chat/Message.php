<?php

namespace App\Models\Chat;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Message extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'group_id',
        'user_id',
        'message',
        'type',
        'reply_to',
        'is_edited',
    ];

    protected $casts = [
        'is_edited' => 'boolean',
    ];

    public function group()
    {
        return $this->belongsTo(ChatGroup::class);
    }

    public function sender()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function reply()
    {
        return $this->belongsTo(Message::class, 'reply_to');
    }

    public function attachments()
    {
        return $this->hasMany(MessageAttachment::class);
    }

    public function reads()
    {
        return $this->hasMany(MessageRead::class);
    }
}
