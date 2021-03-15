<?php

namespace App\Repositories;

use App\Traits\JsonResponse;
use App\Http\Requests\RatingValueRequest;
use App\Http\Resources\RatingValueResource;
use App\Interfaces\RatingValueInterface;
use App\Models\Rating_value;

class RatingValueRepository extends BaseRepository implements RatingValueInterface
{
    use JsonResponse;

    public function __construct(Rating_value $model)
    {
        parent::__construct($model);
    }

    public function getRatingValues(int $length = null)
    {
        try {
            $query = $this->model->all();

            $rating_values = collect(RatingValueResource::collection($query));

            return $this->success('All Rating Values', $rating_values->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function saveRatingValue(RatingValueRequest $request)
    {
        try {

            $requestDetails = $request->allowed();

            $ratingValueCheck = $this->model->where('value', $requestDetails['value'])->first();

            if ($ratingValueCheck) {
                return $this->error('Value already exist');
            }

            $ratingValue = $this->model->create($requestDetails);

            return $this->success('Rating Value Created Successfully', $ratingValue->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function getRatingValueById(int $id)
    {
        try {

            $query = $this->model->find($id);

            if (!$query) {
                return $this->notFound("ID does not exists");
            }
            $ratingValue = $query->toArray();
            $this->success('Rating value', $ratingValue);

            return $ratingValue;
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function updateRatingValue(RatingValueRequest $request, int $id)
    {
        try {

            $requestDetails = $request->allowed();

            $rating_value = $this->model->find($id);

            $ratingValueCheck = $this->model->where('value', $requestDetails['value'])->first();

            if ($ratingValueCheck) {
                return $this->error('Value already exist');
            }
            $updateRatingValue = $rating_value->update($requestDetails);

            if (!$updateRatingValue) {
                return $this->error('Something went wrong, Try Again.');
            }

            return $this->success('Value updated successfully', $rating_value->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }


    public function deleteRatingValue(int $id)
    {
        try {

            $ratingValue = $this->model->find($id);
            $action = $ratingValue->delete();

            if ($action) {
                return true;
            }
            return false;
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }
}
