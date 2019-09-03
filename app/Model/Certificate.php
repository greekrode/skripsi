<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    protected $fillable = [
        'name', 'date', 'notes', 'link', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
