<?php

namespace App\Models\Chat;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ChatGroupMember extends Model
{
    use HasFactory;

    protected $fillable = [
        'group_id',
        'user_id',
        'is_admin',
        'joined_at',
    ];

    protected $casts = [
        'is_admin' => 'boolean',
        'joined_at' => 'datetime',
    ];

   public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function group()
    {
        return $this->belongsTo(ChatGroup::class);
    }
}
