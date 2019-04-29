<?php

namespace App\Model;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class JobApplication extends Model
{
    protected $fillable = [
        'filename', 'description', 'accepted', 'rejected'
    ];

    /**
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
    * @return BelongsTo
    */
    public function job()
    {
        return $this->belongsTo(Job::class, 'job_id');
    }
}
