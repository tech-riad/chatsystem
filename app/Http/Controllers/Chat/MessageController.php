<?php

namespace App\Http\Controllers\Chat;

use App\Http\Controllers\Controller;
use App\Models\Chat\ChatGroup;
use App\Models\Chat\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MessageController extends Controller
{
    public function store(Request $request, ChatGroup $group)
    {
        abort_unless(
            $group->members()
                ->where('user_id',auth()->id())
                ->exists(),
            403
        );

        $request->validate([

            'message'=>'required|string|max:5000'

        ]);

        $message=Message::create([

            'group_id'=>$group->id,

            'user_id'=>auth()->id(),

            'message'=>$request->message,

            'type'=>'text'

        ]);

        $message->load('sender');

        return response()->json([

            'success'=>true,

            'message'=>$message

        ]);
    }
}
