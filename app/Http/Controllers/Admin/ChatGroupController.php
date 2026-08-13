<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreChatGroupRequest;
use App\Http\Requests\Admin\UpdateChatGroupRequest;
use App\Models\Chat\ChatGroup;
use App\Models\User;
use App\Services\Chat\ChatGroupService;
class ChatGroupController extends Controller
{

    protected ChatGroupService $groupService;

    public function __construct(ChatGroupService $groupService)
    {
        $this->groupService = $groupService;

        $this->middleware('permission:group.view')->only(['index']);
        $this->middleware('permission:group.create')->only(['create', 'store']);
        $this->middleware('permission:group.edit')->only(['edit', 'update']);
        $this->middleware('permission:group.delete')->only(['destroy']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd(auth()->user()->getRoleNames());
        $groups = ChatGroup::with([
            'creator',
            'members.user',
        ])
        ->latest()
        ->paginate(10);

        return view('admin.chat-groups.index',
            compact('groups')
        );
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

            // dd(auth()->user()->getRoleNames());

        return view('admin.chat-groups.create',compact('users')
        );
    }

    /**
     * Store a newly created resource.
     */
    public function store(StoreChatGroupRequest $request)
    {
        $this->groupService->store(
            $request->validated()
        );

        return redirect()
            ->route('admin.chat-groups.index')
            ->with('success','Group Created Successfully');
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

        $selectedMembers = $chatGroup->members()
            ->pluck('user_id')
            ->toArray();

        return view('admin.chat-groups.edit',
            compact(
                'chatGroup',
                'users',
                'selectedMembers'
            )
        );
    }

    /**
     * Update the specified resource.
     */
    public function update(UpdateChatGroupRequest $request, ChatGroup $chatGroup)
    {
<<<<<<< HEAD
        $this->groupService->update(
            $chatGroup,
            $request->validated()
        );

        return redirect()
            ->route('admin.chat-groups.index')
            ->with('success', 'Group Updated Successfully.');
=======
        //
>>>>>>> 70ad356 (update)
    }

    /**
     * Remove the specified resource.
     */
    public function destroy(ChatGroup $chatGroup)
    {

    }
}