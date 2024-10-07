<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }

    public function user() :belongsTo
    {
        return $this->belongsTo(User::class);
    }
}
