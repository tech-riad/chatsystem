<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('chat.{groupId}', function ($user, $groupId) {

    return \App\Models\Chat\ChatGroupMember::where(
        'group_id',
        $groupId
    )->where(
        'user_id',
        $user->id
    )->exists();

});
