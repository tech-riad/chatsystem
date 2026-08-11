<?php

namespace App\Models\Chat;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class ChatGroup extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'uuid',
        'name',
        'image',
        'description',
        'created_by',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function members()
    {
        return $this->hasMany(ChatGroupMember::class, 'group_id');
    }

    public function messages()
    {
        return $this->hasMany(Message::class, 'group_id');
    }

    protected static function booted()
    {
        static::creating(function ($group) {

            $group->uuid = Str::uuid();

        });
    }
}
