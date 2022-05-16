<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
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
        'company_name',
        'additional_phone',
        'file5',
        'conditions',
        'applicant_fio',
        'applicant_position',
        'applicant_phone_number',
        'visa_date'
    ];

    public function reletions()
    {
        return $this->hasMany(Reletion::class, 'founder_id', 'id');
    }
}
