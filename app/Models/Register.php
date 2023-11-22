<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'last_name',
        'contact',
        'email',
        // 'status',
        'age',
        'sex',
        'address',
        'fee',
        'emergency_name',
        'emergency_contact',
        'relationship',
    ];
}
