<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;
    protected $table = "proposal";
    protected $fillable = [
        'first_name',
        'last_name',
        'event_name',
        'event_description',
        'doe',
        'location',
    ];
}
