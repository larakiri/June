<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;
    
    public function author() 
    {
        return $this->belongsTo(User::class, 'following_id', 'id');
    }
}