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
        })->get();

        $activeGroup = $groups->first();

        if ($activeGroup) {

            $activeGroup->load([
                'members.user',
                'messages' => function ($q) {
                    $q->with('sender')
                    ->latest()
                    ->take(50);
                }
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

        $groups = ChatGroup::whereHas('members', function ($q) {
            $q->where('user_id', auth()->id());
        })->get();

        $group->load([
            'members.user',
            'messages' => function ($q) {
                $q->with('sender')
                ->latest()
                ->take(50);
            }
        ]);

        return view('user.chat.index', [
            'groups' => $groups,
            'activeGroup' => $group
        ]);
    }
}
