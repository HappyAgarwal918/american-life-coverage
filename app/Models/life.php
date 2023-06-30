<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class life extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alc_life';

    protected $fillable = [
        'f_name',
        'l_name',
        'age',
        'purpose',
        'email',
        'zip',
        'phone_number',
        'type',
    ];

    // public $timestamp = false;
}
