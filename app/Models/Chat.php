<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
 
    public function session(){
        return $this->belongsTo(Session::class);
    }
    
    public function message(){
        return $this->belongsTo(Message::class);
    }
    
}
