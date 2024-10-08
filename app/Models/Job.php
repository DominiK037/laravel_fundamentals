<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Notifications\Notifiable;

class Job extends Model
{
    use HasFactory, Notifiable;

    protected $table = 'job_listings';

    protected $guarded = [];

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class, 'employer_id', 'id', 'employer_id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: "job_listing_id");
    }
}
