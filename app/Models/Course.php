<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'course_name',
        'course_description'
    ];

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'course_id');
    }
}
