<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Seniority extends Model
{
    protected $fillable = ['name'];

    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
