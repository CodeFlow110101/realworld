<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    use HasFactory;

    protected $table = "chats";

    protected $fillable = ['user_id', 'message', 'group_id', 'is_archive', 'reply_to', 'file_name', 'file_path'];
}
