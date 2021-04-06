<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable=[
        'content',
        'user_id',

    ];

    // 1 task thuộc sở hữu của 1 user
    public function user(){
        return $this->belongsTo(User::class);
    }
}
