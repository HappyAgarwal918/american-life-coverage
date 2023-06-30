<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class datarequest extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alc_datarequest';

    protected $fillable = [
        'f_name',
        'l_name',
        'address1',
        'address2',
        'city',
        'zip',
        'phone_number',
        'email',
        'dob',
        'type',
    ];

    // public $timestamp = false;
}
