<?php

namespace App\Models;

use App\Models\Rating_value;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Rating extends Model
{
    use HasFactory;

    /**
     * Get the parent ratingable model (Company).
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function ratingable(): MorphTo
    {
        return $this->morphTo();
    }

    /**
     * Get the rating that owns the Rating_value
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function rating_value(): BelongsTo
    {
        return $this->belongsTo(Rating_value::class);
    }

    /**
     * Get the user that owns the Rating
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
