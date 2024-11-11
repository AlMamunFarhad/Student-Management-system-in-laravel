<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;

    protected $fillable = ['student_name','course_name','enroll_no','fee','join_date'];

    public function payment()
    {
        return $this->hasOne(Payment::class);
    }
   
}
