<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    protected $fillable = [
        'fio',
        'file',
        'country',
        'activity',
        'project',
        'file2',
        'file3',
        'phone_number',
        'username',
        'email',
    ];
}