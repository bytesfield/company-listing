<?php

namespace App\Interfaces;

use App\Http\Requests\RatingValueRequest;

interface RatingInterface
{
    /**
     * Get all Rating Values
     * 
     * @param integer $length
     * @method  GET api/admin/rating-value
     * @access  public
     */
    public function getCompanyRatings(int $length);
}
