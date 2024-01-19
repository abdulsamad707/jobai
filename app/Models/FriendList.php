<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FriendList extends Model
{
    use HasFactory;
    public $table="friend_lists";

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function frnd(){
        return $this->belongsTo(User::class,'friend_id','id');
    }
}
