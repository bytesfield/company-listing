<?php

namespace App\Http\Controllers\API;

use Exception;
use App\Traits\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Interfaces\CompanyInterface;
use App\Repositories\CompanyRepository;
use App\Http\Requests\CompanyRequest;


class CompanyController extends Controller
{
    use JsonResponse;


    public function __construct(CompanyInterface $companyInterface)
    {
        $this->companyInterface = $companyInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \App\Traits\JsonResponse
     */
    public function index()
    {
        $companies = $this->companyInterface->getAllCompanies();
        return $companies;
    }

    /**
     * Store a new Company.
     *
     * @param  \App\Http\Requests\CompanyRequest  $request
     * @return \App\Traits\JsonResponse
     */

    public function store(CompanyRequest $request)
    {

        $company = $this->companyInterface->saveCompany($request);

        return $company;
    }

    /**
     * Display a company's details by $id.
     *
     * @param  int  $id
     * @return \App\Traits\JsonResponse
     */
    public function show(int $id)
    {
        $company = $this->companyInterface->getCompanyById($id);

        return $company;
    }

    /**
     * Update company by $id.
     *
     * @param  int  $id
     * @return \App\Traits\JsonResponse
     */
    public function update(CompanyRequest $request, $id)
    {
        $company = $this->companyInterface->updateCompany($request, $id);
        return $company;
    }

    /**
     * Remove the specified mail.
     *
     * @param  int  $id
     * @return \App\Traits\JsonResponse
     */
    public function destroy(int $id)
    {
        $company = $this->companyInterface->deleteCompany($id);

        return $company;
    }
}
