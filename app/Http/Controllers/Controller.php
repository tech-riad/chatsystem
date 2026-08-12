<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\UpdateChatGroupRequest;
use App\Models\Chat\ChatGroup;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    public function update(
        UpdateChatGroupRequest $request,
        ChatGroup $chatGroup
    )
    {
        $this->groupService->update(
            $chatGroup,
            $request->validated()
        );

        return redirect()
            ->route('admin.chat-groups.index')
            ->with('success', 'Group Updated Successfully.');
    }
}
