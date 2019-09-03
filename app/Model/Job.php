<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'title', 'city', 'country', 'description', 'basic_requirements', 'preferred_requirements', 'responsibilities', 'benefits', 'user_id', 'end_date'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function seniority()
    {
        return $this->belongsTo(Seniority::class, 'seniority_id');
    }

    public function type()
    {
        return $this->belongsTo(EmploymentType::class, 'type_id');
    }

    public function applications()
    {
        return $this->hasMany(JobApplication::class, 'job_id');
    }
}
