<?php

namespace App\Repositories;

use App\Traits\JsonResponse;
use App\Http\Requests\CompanyRequest;
use App\Interfaces\CompanyInterface;
use App\Models\Company;
use App\Models\Rating;

class CompanyRepository extends BaseRepository implements CompanyInterface
{
    use JsonResponse;

    public function __construct(Company $model)
    {
        parent::__construct($model);
    }

    public function getAllCompanies(int $length = null)
    {
        try {
            $companies = $this->model->with('rating')->get();

            return $this->success('All Registered Companies', $companies->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function saveCompany(CompanyRequest $request)
    {
        try {

            $requestDetails = $request->allowed();

            $createCompany = $this->model->create($requestDetails);

            if (!$createCompany) {
                return $this->error('Something went wrong, Try Again.');
            }

            return $this->success('Company Created Successfully', $createCompany->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function getCompanyById(int $id)
    {
        try {

            $company = $this->model->with('rating')->find($id);

            if (!$company) {
                return $this->notFound("Company ID does not exists");
            }

            return $this->success('Company Details', $company->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function updateCompany(CompanyRequest $request, int $id)
    {
        try {

            $requestDetails = $request->allowed();

            $company = $this->model->find($id);
            $updateCompany = $company->update($requestDetails);

            if (!$updateCompany) {
                return $this->error('Something went wrong, Try Again.');
            }

            return $this->success('Company updated successfully', $company->toArray());
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }

    public function deleteCompany(int $id)
    {
        try {

            $company = $this->model->find($id);
            $companyRatingCheck = Rating::where('ratingable_id', $id)->where('ratingable_type', 'App\Models\Company')->first();

            if ($companyRatingCheck) {
                return $this->error('This company has ratings and can not be deleted');
            }
            $deleteCompany = $company->delete();

            if (!$deleteCompany) {
                return false;
            }
            return true;
        } catch (\Exception $e) {

            return $this->error($e->getMessage());
        }
    }
}
