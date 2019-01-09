<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'name', 'faculty_id'
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }
}
