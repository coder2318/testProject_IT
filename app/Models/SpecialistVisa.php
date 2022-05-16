<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpecialistVisa extends Model
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
        'adress',
        'phone',
        'additional_phone',
        'file5',
        'company_name',
        'adress_specialist',
        'file',
        'phone_specialist',
        'file2',
        'file3',
        'applicant_fio',
        'applicant_position',
        'applicant_phone_number',
        'visa_date',
        'conditions',

    ];

    public function reletions()
    {
        return $this->hasMany(Reletion::class,  'specialist_id', 'id');
    }
}
