<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Notification extends Model
{
    use HasFactory;

    protected $casts = [
        "receive_newsletter" => "boolean",
        "receive_promotions" => "boolean",
    ];

    protected $attributes = [
        "receive_newsletter" => true,
        "receive_promotions" => true,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }
}
