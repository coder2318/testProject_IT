<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistRelocation extends Model
{
    use HasFactory;

    protected $fillable = [
        'fio',
        'specialization',
        'skills',
        'prof_level',
        'link_portfolio',
        'contact_number',
        'city',
        'employment',
        'file',
        'is_showed'
    ];
}
