<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    use HasFactory;

    const AVATARS_PATH = "avatars";

    protected $fillable = ["avatar", "birthdate", "first_name", "last_name", "display_profile"];

    protected $casts = [
        "birthdate" => "date:Y-m-d",
        "display_profile" => "boolean",
    ];

    protected $attributes = [
        "avatar" => "",
        "birthdate" => "",
        "first_name" => "",
        "last_name" => "",
        "display_profile" => false,
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function profileAvatarUrl(): string {
        if ($this->avatar) {
            return Storage::url(sprintf("%s/%s", Profile::AVATARS_PATH, $this->avatar));
        }
        return asset("images/avatar.png");
    }
}
