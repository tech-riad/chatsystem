<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\ChatGroup;

class ChatController extends Controller
{
    public function index()
    {
        $groups = ChatGroup::whereHas('members', function ($q) {
            $q->where('user_id', auth()->id());
        })
        ->with([
            'members.user',
            'creator',
            'messages' => function ($q) {
                $q->latest()->limit(1);
            }
        ])
        ->get();

        return view('user.chat.index', compact('groups'));
    }
}
