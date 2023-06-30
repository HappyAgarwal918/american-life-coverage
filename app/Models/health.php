<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class health extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alc_health';

    protected $fillable = [
        'f_name',
        'l_name',
        'dob',
        'yearly_income',
        'email',
        'zip',
        'phone_number',
        'type',
    ];

    // public $timestamp = false;
}
