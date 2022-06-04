<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reletion extends Model
{
    use HasFactory;
    protected $fillable = [
        "reletion_level",
        'reletion_fio',
        'reletion_birth',
        'reletion_citizen',
        'file6',
        'founder_id',
        'specialist_id',
        'investor_id'
    ];
}
