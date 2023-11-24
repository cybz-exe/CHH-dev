<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'contact',
        'email',
        'status',
        'age',
        'dob',
        'sex',
        'address',
        'fee',
        'emergency_name',
        'emergency_contact',
        'relationship',
        'image'
    ];
}
