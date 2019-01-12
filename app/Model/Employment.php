<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Employment extends Model
{
    protected $table = 'employments';

    protected $fillable = [
        'title', 'location', 'company', 'grade', 'start_date', 'end_date', 'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
