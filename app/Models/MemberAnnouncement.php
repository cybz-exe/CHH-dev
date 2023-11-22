<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberAnnouncement extends Model
{
    use HasFactory;
    protected $table = 'announcement';
    protected $fillable = [
        'file_name',
        'date',

    ];
}
