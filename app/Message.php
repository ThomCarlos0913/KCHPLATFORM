<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['sender_id', 'receiver_id', 'sender_avatar', 'receiver_avatar', 'message', 'is_read'];
}
