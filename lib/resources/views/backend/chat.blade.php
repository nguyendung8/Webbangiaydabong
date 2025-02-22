@extends('backend.master')
@section('title', 'Chat với ' . $user->name)
@section('main')
<style>
    .chat-container {
        height: 500px;
        overflow-y: auto;
        padding: 20px;
    }
    .message-bubble {
        max-width: 70%;
        padding: 10px 15px;
        border-radius: 15px;
        margin-bottom: 10px;
    }
    .sent {
        background-color: #337AB7;
        color: white;
        margin-left: auto;
    }
    .received {
        background-color: #f1f0f0;
    }
    .message-input {
        padding: 20px;
        background: white;
        border-top: 1px solid #ddd;
    }
    .message-time {
        font-size: 12px;
        color: #888;
        margin-top: 5px;
    }
</style>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Chat với {{ $user->email }}</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    {{ $user->email }}
                </div>
                <div class="chat-container">
                    @foreach($messages as $message)
                        <div class="message-bubble {{ $message->sender_id == Auth::id() ? 'sent' : 'received' }}">
                            {{ $message->message }}
                            <div class="message-time">
                                {{ $message->created_at->format('H:i d/m/Y') }}
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="message-input">
                    <form action="{{ asset('admin/message/send') }}" method="POST">
                        @csrf
                        <input type="hidden" name="receiver_id" value="{{ $user->id }}">
                        <div class="input-group">
                            <input type="text" name="message" class="form-control" placeholder="Nhập tin nhắn...">
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Gửi</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
