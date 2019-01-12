<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $table = 'educations';

    protected $fillable = [
        'school', 'degree', 'field_of_study', 'grade', 'start_year', 'end_year', 'description', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
