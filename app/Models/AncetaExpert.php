<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AncetaExpert extends Model
{
    use HasFactory;

    const STATUS_DEFAULT = 1;
    const STATUS_WAITING = 2;
    const STATUS_CONFIRMED = 3;
    const STATUS_REJECTED = 4;

    const TYPE_FOUNDER = 'founder';
    const TYPE_INVESTOR = 'investor';
    const TYPE_VISA = 'visa';

    protected $fillable = [
        'status',
        'type',
        'user_id',
        'anceta_id',
        'reject_reason'
    ];

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
