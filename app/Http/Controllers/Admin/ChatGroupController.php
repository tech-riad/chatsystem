<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Chat\ChatGroup;
use App\Models\User;

class ChatGroupController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $groups = ChatGroup::with([
                'creator',
                'members.user'
            ])
            ->latest()
            ->paginate(10);

        return view('admin.chat-groups.index', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::role('User')
            ->where('status', true)
            ->orderBy('name')
            ->get();

        return view('admin.chat-groups.create', compact('users'));
    }

    /**
     * Store a newly created resource.
     */
    public function store()
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(ChatGroup $chatGroup)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ChatGroup $chatGroup)
    {
        $users = User::role('User')
            ->where('status', true)
            ->orderBy('name')
            ->get();

        return view('admin.chat-groups.edit', compact(
            'chatGroup',
            'users'
        ));
    }

    /**
     * Update the specified resource.
     */
    public function update(ChatGroup $chatGroup)
    {

    }

    /**
     * Remove the specified resource.
     */
    public function destroy(ChatGroup $chatGroup)
    {

    }
}
