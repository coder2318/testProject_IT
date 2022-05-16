<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Investor extends Model
{
    use HasFactory;
    protected $fillable = [
        'fio',
        'date_birth',
        'sex',
        'citizen',
        'passport_number',
        'passport_date',
        'passport_expire',
        'file4',
        'file5',
        'adress',
        'phone',
        'additional_phone',
        'project',
        'activity',
        'file',
        'file2',
        'file3',
        'applicant_fio',
        'applicant_position',
        'applicant_phone_number',
        'visa_date'
    ];

    public function reletions()
    {
        return $this->hasMany(Reletion::class,  'investor_id', 'id');
    }
}
