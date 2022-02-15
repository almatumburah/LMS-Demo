<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Enrollment extends Model
{
    use SoftDeletes;

    public $table = 'enrollments';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'status',
        'progress',
        'user_id',
        'course',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_RADIO = [
        'awaiting' => 'Awaiting',
        'accepted' => 'Accepted',
        'rejected' => 'Rejected',
    ];

    const PROGRESS_RADIO = [
        'not started' => 'Not Started',
        'in progress' => 'In Progress',
        'completed' => 'Completed',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function course()
    {
        return $this->hasOne(Course::class);
    }

}
