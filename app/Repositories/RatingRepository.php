<?php

namespace App\Repositories;

use App\Models\Rating;
use App\Models\Company;
use App\Models\Rating_value;
use App\Traits\JsonResponse;
use App\Interfaces\RatingInterface;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\RatingRequest;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Resources\RatingValueResource;

class RatingRepository extends BaseRepository implements RatingInterface
{
    use JsonResponse;

    public function __construct(Rating $model)
    {
        parent::__construct($model);
    }

    public function getCompanyRatings(int $length = null)
    {
        try {

            $ratings = Rating::whereHasMorph(
                'ratingable',
                [Company::class],
                function (Builder $query) {
                    $query->orderBy('name');
                }
            )->with('rating_value', 'user')->get();

            return $this->success('All Rating Values', $ratings->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function rateCompany(RatingRequest $request)
    {
        try {

            $user = Auth::user();
            $user_id = $user->id;

            $company_id = $request->entity_id;
            $company = Company::find($company_id);

            $userCompanyRatingCheck = $company->ratings()->where('user_id', $user_id)->first();

            if ($userCompanyRatingCheck) {
                return $this->error('You have already rated this company');
            }

            $company->ratings()->create([
                'user_id' => $user_id,
                'rating_value_id' => $request->rating_value_id,
            ]);

            return $this->success('Company rated Successfully');
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }
}
