<?php

namespace App\Http\Controllers;

use App\Models\VpCustomerCare;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    // Gửi tin nhắn
    public function sendMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000'
        ]);

        try {
            VpCustomerCare::create([
                'sender_id' => Auth::id(),
                'receiver_id' => 1, // ID của admin
                'message' => $request->message,
                'is_read' => false
            ]);

            return back()->with('success', 'Tin nhắn đã được gửi');
        } catch (\Exception $e) {
            return back()->with('error', 'Không thể gửi tin nhắn. Vui lòng thử lại sau.');
        }
    }

    // Đánh dấu tin nhắn đã đọc
    public function markAsRead($receiver_id)
    {
        VpCustomerCare::where('sender_id', $receiver_id)
            ->where('receiver_id', Auth::id())
            ->update(['is_read' => true]);

        return response()->json(['status' => 'success']);
    }

    public function getMessages()
    {
        $user_id = Auth::id();
        $messages = VpCustomerCare::where(function($query) use ($user_id) {
            $query->where('sender_id', $user_id)
                  ->where('receiver_id', 1);
        })->orWhere(function($query) use ($user_id) {
            $query->where('sender_id', 1)
                  ->where('receiver_id', $user_id);
        })
        ->orderBy('created_at', 'asc')
        ->get();

        return response()->json($messages);
    }
}
