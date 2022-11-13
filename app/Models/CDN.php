<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CDN extends Base
{
    use HasFactory;
    protected $table = 'cdn';

    protected $fillable = [
        'source', 'size',
    ];

    public function getUrlAttribute(): string
    {
        return $this->size === null ? $this->source : (env('AWS_HOST').$this->source);
    }

}
