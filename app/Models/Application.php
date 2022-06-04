<?php

namespace App\Models;

use App\Services\QrCodeService;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
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
        'application_number',
        'register_date',
        'expire_date',
        'created_at',
        'status',
        'qr_code'
    ];

    public function reletions()
    {
        return $this->hasMany(Reletion::class, 'application_id', 'id');
    }

}
