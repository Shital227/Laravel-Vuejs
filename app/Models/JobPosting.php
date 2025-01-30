<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    protected $guarded = [];

    protected $appends = ['created_at_human'];

    public function skills()
    {
        return $this->belongsToMany(Skill::class, 'job_posting_skills');
    }

    public function getCompanyLogoAttribute($value)
    {
        return $value ? asset('storage/' . $value) : asset('images/default-logo.png');
    }

    public function getExtraAttribute($value)
    {
        return $value ? explode(',', $value) : [];
    }

    public function getCreatedAtHumanAttribute()
    {
        return Carbon::parse($this->created_at)->diffForHumans();
    }
}
