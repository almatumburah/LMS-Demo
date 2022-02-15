<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Learner extends Model
{
    use SoftDeletes;

    public $table = 'learners';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'first_name',
        'last_name',
        'dob',
        'gender',
        'level',
        'contact',
        'address',
        'city',
        'province',
        'eligible_based_on',
        'current_school',
        'guardian_document',
        'next_of_kin',
        'next_of_kin_address',
        'status',
        'user_id',
        'institution_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    const STATUS_RADIO = [
        'awaiting' => 'Awaiting',
        'accepted' => 'Accepted',
        'rejected' => 'Rejected',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'institution_id');
    }
}
