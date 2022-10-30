<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class MessageController extends Controller
{
    function send(Request $request)
    {
        $senderId = session('id');
        $receiverId = $request->receiver_id;
        $message = $request->message;

        $save_message = new Message();
        $save_message->sender_id = $senderId;
        $save_message->receiver_id = $receiverId;
        $save_message->message = $message;
        $save_message->save();

        return true;
    }
}
