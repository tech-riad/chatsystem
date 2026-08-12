<?php

namespace App\Services\Chat;

use App\Models\Chat\ChatGroup;
use App\Models\Chat\ChatGroupMember;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;



class ChatGroupService
{
    public function store(array $data): ChatGroup
    {
        return DB::transaction(function () use ($data) {

            /*
            |--------------------------------------------------------------------------
            | Upload Image
            |--------------------------------------------------------------------------
            */

            $image = null;

            if (
                isset($data['image']) &&
                $data['image'] instanceof UploadedFile
            ) {
                $image = $data['image']->store(
                    'chat/groups',
                    'public'
                );
            }

            /*
            |--------------------------------------------------------------------------
            | Create Group
            |--------------------------------------------------------------------------
            */

            $group = ChatGroup::create([
                'name'        => $data['name'],
                'description' => $data['description'] ?? null,
                'image'       => $image,
                'created_by'  => Auth::id(),
                'status'      => true,
            ]);

            /*
            |--------------------------------------------------------------------------
            | Creator = Group Admin
            |--------------------------------------------------------------------------
            */

            ChatGroupMember::create([
                'group_id'  => $group->id,
                'user_id'   => Auth::id(),
                'is_admin'  => true,
                'joined_at' => now(),
            ]);

            /*
            |--------------------------------------------------------------------------
            | Add Members
            |--------------------------------------------------------------------------
            */

            foreach ($data['members'] as $memberId) {

                ChatGroupMember::create([
                    'group_id'  => $group->id,
                    'user_id'   => $memberId,
                    'is_admin'  => false,
                    'joined_at' => now(),
                ]);

            }

            return $group;

        });
    }
}
