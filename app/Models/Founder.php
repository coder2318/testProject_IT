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
        'visa_date',
        'file2'
    ];

    public function reletions()
    {
        return $this->hasMany(Reletion::class, 'founder_id', 'id');
    }
}
