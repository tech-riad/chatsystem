<?php

namespace App\Models\Chat;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MessageAttachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'message_id',
        'original_name',
        'file_name',
        'extension',
        'mime',
        'size',
        'path',
    ];

    public function message()
    {
        return $this->belongsTo(Message::class);
    }
}
