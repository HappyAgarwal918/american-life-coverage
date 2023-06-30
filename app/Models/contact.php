<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alc_contact';

    protected $fillable = [
        'f_name',
        'l_name',
        'email',
        'phone_number',
        'comments',
    ];

    // public $timestamp = false;
}
