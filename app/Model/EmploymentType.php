<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class EmploymentType extends Model
{
    protected $table = 'employment_types';

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
