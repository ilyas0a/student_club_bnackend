<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'description',
        'profile_picture',
        'email',
        'phone_number',
        'president_id',
    ];
}
