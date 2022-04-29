<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistVisa extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
        'file',
        'country',
        'resume',
        'file2',
        'file3',
        'phone',
        'email'
    ];
}