<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $guarded = [
        'id'
    ];

    protected $fillable = [
        'name'
    ];

    public function majors()
    {
        return $this->hasMany(Major::class);
    }
}
