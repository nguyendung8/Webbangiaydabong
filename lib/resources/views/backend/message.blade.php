@extends('backend.master')
@section('title', 'Danh sách tin nhắn')
@section('main')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .user-item {
        border: 1px solid #337AB7;
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 4px;
        cursor: pointer;
        transition: all 0.3s;
    }
    .user-item:hover {
        background-color: #f5f5f5;
    }
    .unread-badge {
        background: #337AB7;
        color: white;
        padding: 2px 8px;
        border-radius: 10px;
        float: right;
    }
</style>

<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tin nhắn</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-md-5 col-lg-9">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    Danh sách tin nhắn từ khách hàng
                </div>
                <div class="panel-body">
                    @foreach($users as $user)
                    <div class="user-item" onclick="window.location.href='{{ asset('admin/message/chat/' . $user->id) }}'">
                        <strong>{{ $user->email }}</strong>
                        @php
                            $unreadCount = \App\Models\VpCustomerCare::where('sender_id', $user->id)
                                ->where('receiver_id', Auth::id())
                                ->where('is_read', 0)
                                ->count();
                        @endphp
                        @if($unreadCount > 0)
                            <span class="unread-badge">{{ $unreadCount }}</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
