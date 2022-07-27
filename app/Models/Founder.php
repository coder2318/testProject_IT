<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Founder extends Model
{
    use HasFactory;

    const STATUS_DEFAULT = 1;
    const STATUS_WAITING = 2;
    const STATUS_CONFIRMED = 3;
    const STATUS_REJECTED = 4;

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
        'file2',
        'status',
        'reject_reason',
        'is_showed'
    ];

    public function reletions()
    {
        return $this->hasMany(Reletion::class, 'founder_id', 'id');
    }

    public function scopeSent($query)
    {
        $query->where('status', '!=', self::STATUS_DEFAULT);
    }
}
