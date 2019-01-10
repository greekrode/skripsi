<?php

namespace App;

use App\Model\Award;
use App\Model\Education;
use App\Model\Employment;
use App\Model\Faculty;
use App\Model\Major;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends \TCG\Voyager\Models\User implements MustVerifyEmail
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password', 'birthday', 'gender', 'birthplace', 'occupation', 'facebook', 'faculty_id', 'major_id', 'twitter', 'instagram', 'phone_number', 'country', 'city',
        'profile_image', 'profile_mime', 'profile_original_image', 'header_image', 'header_mime', 'header_original_image', 'linked_in', 'about'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function faculty()
    {
        return $this->belongsTo(Faculty::class, 'faculty_id');
    }

    public function major()
    {
        return $this->belongsTo(Major::class, 'major_id');
    }
}
