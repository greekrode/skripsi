<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Award extends Model
{
    protected $fillable = [
        'name', 'organization', 'start_date', 'end_date', 'description', 'image', 'mime', 'original_image', 'link', 'verified', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
