<?php

namespace App\Models;

use App\Models\Rating;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Company extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'website',
        'phone',
        'email',
    ];

    /**
     * Get the company's rating.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function rating(): MorphMany
    {
        return $this->morphMany(Rating::class, 'ratingable');
    }

    /**
     * Scope a query to get all departments.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeAll(Builder $query)
    {
        return $query->orderBy('name', 'asc');
    }
}
