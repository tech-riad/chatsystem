<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\ChatGroup;

class ChatController extends Controller
{
    public function index()
{
    $groups = auth()->user()
        ->chatGroups()
        ->with([
            'creator',
            'members.user',
            'messages' => function ($query) {
                $query->latest()->limit(1);
            }
        ])
        ->get();

    $activeGroup = $groups->first();

    if ($activeGroup) {
        $activeGroup->load([
            'messages' => function ($query) {
                $query->with('sender')
                    ->oldest()
                    ->get();
            },
            'members.user'
        ]);
    }

    return view('user.chat.index', compact(
        'groups',
        'activeGroup'
    ));
}
    public function show(ChatGroup $group)
{
    abort_unless(
        $group->members()->where('user_id', auth()->id())->exists(),
        403
    );

    $groups = auth()->user()
        ->chatGroups()
        ->with([
            'messages' => function ($query) {
                $query->latest()->limit(1);
            }
        ])
        ->get();

    $group->load([
        'members.user',
        'messages.sender'
    ]);

    return view('user.chat.index', [
        'groups' => $groups,
        'activeGroup' => $group
    ]);
}
}
