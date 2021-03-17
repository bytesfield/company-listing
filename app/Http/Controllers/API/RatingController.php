<?php

namespace App\Http\Controllers\API;

use App\Traits\JsonResponse;
use App\Http\Controllers\Controller;
use App\Http\Requests\RatingRequest;
use App\Interfaces\RatingInterface;


class RatingController extends Controller
{
    use JsonResponse;


    public function __construct(RatingInterface $ratingInterface)
    {
        $this->ratingInterface = $ratingInterface;
    }

    /**
     * Display all rating values.
     *
     * @return \App\Traits\JsonResponse
     */
    public function index()
    {
        $ratingValues = $this->ratingInterface->getCompanyRatings();
        return $ratingValues;
    }

    /**
     * Store a new Rating value.
     *
     * @param  \App\Http\Requests\RatingValueRequest  $request
     * @return \App\Traits\JsonResponse
     */

    public function rateCompany(RatingRequest $request)
    {

        $rating = $this->ratingInterface->rateCompany($request);

        return $rating;
    }

    // /**
    //  * Display a Rating Value by $id.
    //  *
    //  * @param  int  $id
    //  * @return \App\Traits\JsonResponse
    //  */
    // public function show(int $id)
    // {
    //     $ratingValue = $this->ratingValueInterface->getRatingValueById($id);

    //     return $ratingValue;
    // }

    // /**
    //  * Update Rating_value by $id.
    //  *
    //  * @param  int  $id
    //  * @return \App\Traits\JsonResponse
    //  */
    // public function update(RatingValueRequest $request, $id)
    // {
    //     $company = $this->ratingValueInterface->updateRatingValue($request, $id);
    //     return $company;
    // }

    // /**
    //  * Delete a Rating value.
    //  *
    //  * @param  int  $id
    //  * @return \App\Traits\JsonResponse
    //  */
    // public function destroy(int $id)
    // {
    //     $company = $this->ratingValueInterface->deleteRatingValue($id);

    //     if ($company) {
    //         return $this->success('Rating value Deleted successfully');
    //     }
    //     return $this->error('Something went wrong try again');
    // }
}
