<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Link extends Base
{
    use HasFactory;

    protected $fillable = [
        'compacted_link', 'expired_at', 'is_redirect_directly', 'cdn_id', 'device_id',
    ];

    public function getUrlAttribute(): string
    {
        return env('APP_URL').$this->compacted_link;
    }

    public function cdn(): BelongsTo
    {
        return $this->belongsTo(CDN::class, 'cdn_id', 'id');
    }

    public function getRootUrlAttribute(): string
    {
        return $this->cdn->url;
    }

}






