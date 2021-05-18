<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Pitch extends Model
{
    use HasFactory;
    protected $guarded = [];
    const EXCERPT_LENGTH = 200;

    public function owner()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function members()
    {
        return $this->hasMany(Team::class);
    }

    public function characters()
    {
        return $this->hasMany(Characters::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function image()
    {
        return $this->images()->first();
    }

    public function businessPlans()
    {
        return $this->hasMany(BusinessPlan::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function teasers()
    {
        return $this->hasMany(Teaser::class);
    }

    public function excerpt()
    {
        return Str::limit($this->description, Pitch::EXCERPT_LENGTH);
    }
}
