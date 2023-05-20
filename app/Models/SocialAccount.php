<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialAccount extends Model
{
    use HasFactory;

    protected $guarded = [];

    //table socialacount terhubung dengan model user

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
