<?php

namespace App\Interfaces;

use App\Http\Requests\RatingValueRequest;

interface RatingValueInterface
{
    /**
     * Get all Rating Values
     * 
     * @param integer $length
     * @method  GET api/rating-value
     * @access  public
     */
    public function getRatingValues(int $length);

    /**
     * Get Rating Value By ID
     * 
     * @param integer $id
     * 
     * @method  GET api/rating-value/{id}
     * @access  public
     */
    public function getRatingValueById(int $id);


    /**
     * Store Rating Value
     * 
     * @param  \App\Http\Requests\RatingValueRequest $request
     * @param  integer $id
     * 
     * @method  POST api/rating-value
     * @access  public
     */
    public function saveRatingValue(RatingValueRequest $request);

    /**
     * Update Rating Value
     * 
     * @param  \App\Http\Requests\RatingValueRequest $request
     * @param  integer $id
     * 
     * @method  PUT api/rating-value/{id}
     * @access  public
     */
    public function updateRatingValue(RatingValueRequest $request, int $id);


    /**
     * Delete Rating Value
     * 
     * @param integer $id
     * 
     * @method  DELETE  api/rating-value/{id}
     * @access  public
     */
    public function deleteRatingValue(int $id);
}
