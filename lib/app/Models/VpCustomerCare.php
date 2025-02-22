<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VpCustomerCare extends Model
{
    use HasFactory;

    protected $table = 'vp_customer_cares';

    protected $fillable = ['sender_id', 'receiver_id', 'message', 'is_read'];


    public function sender()
    {
        return $this->belongsTo(VpUser::class, 'sender_id');
    }

    public function receiver()
    {
        return $this->belongsTo(VpUser::class, 'receiver_id');
    }

}
