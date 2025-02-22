<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::table('vp_customer_cares', function (Blueprint $table) {
            $table->unsignedBigInteger('sender_id')->after('id'); // Người gửi (Admin/User)
            $table->text('message')->after('phone_number'); // Nội dung tin nhắn
            $table->boolean('is_read')->default(false)->after('message'); // Trạng thái đã đọc

            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('vp_customer_cares', function (Blueprint $table) {
            $table->dropForeign(['sender_id']);
            $table->dropColumn(['sender_id', 'message', 'is_read']);
        });
    }
};
