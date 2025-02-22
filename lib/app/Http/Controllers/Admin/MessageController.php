<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\VpCustomerCare;
use App\Models\VpUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function getMessage()
    {
        // Get unique users who have sent messages
        $users = VpUser::whereIn('id', function($query) {
            $query->select('sender_id')
                  ->from('vp_customer_cares')
                  ->where('receiver_id', Auth::id())
                  ->distinct();
        })->get();

        return view('backend.message', compact('users'));
    }

    public function getChat($userId)
    {
        $user = VpUser::findOrFail($userId);
        $messages = VpCustomerCare::where(function($query) use ($userId) {
            $query->where('sender_id', $userId)
                  ->where('receiver_id', Auth::id());
        })->orWhere(function($query) use ($userId) {
            $query->where('sender_id', Auth::id())
                  ->where('receiver_id', $userId);
        })->orderBy('created_at', 'asc')->get();

        // Mark messages as read
        VpCustomerCare::where('sender_id', $userId)
            ->where('receiver_id', Auth::id())
            ->where('is_read', 0)
            ->update(['is_read' => 1]);

        return view('backend.chat', compact('messages', 'user'));
    }

    public function sendMessage(Request $request)
    {
        $message = new VpCustomerCare();
        $message->sender_id = Auth::id();
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->is_read = 0;
        $message->save();

        return redirect()->back();
    }

    public function getDeleteMessage($id)
    {
        $message = VpCustomerCare::find($id);
        $message->delete();
        return redirect()->back()->with('success', 'Xóa tin nhắn thành công!');
    }
}

