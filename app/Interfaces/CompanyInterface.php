<?php

namespace App\Interfaces;

use App\Http\Requests\CompanyRequest;

interface CompanyInterface
{
    /**
     * Get all Companies
     * 
     * @param integer $length
     * @method  GET api/company
     * @access  public
     */
    public function getAllCompanies(int $length);

    /**
     * Get Company By ID
     * 
     * @param integer $id
     * 
     * @method  GET api/company/{id}
     * @access  public
     */
    public function getCompanyById(int $id);


    /**
     * Store Company
     * 
     * @param  \App\Http\Requests\CompanyRequest $request
     * @param  integer $id
     * 
     * @method  POST api/company
     * @access  public
     */
    public function saveCompany(CompanyRequest $request);

    /**
     * Update Company
     * 
     * @param  \App\Http\Requests\CompanyRequest $request
     * @param  integer $id
     * 
     * @method  PUT api/company/{id}
     * @access  public
     */
    public function updateCompany(CompanyRequest $request, int $id);


    /**
     * Delete Company
     * 
     * @param integer $id
     * 
     * @method  DELETE  api/company/{id}
     * @access  public
     */
    public function deleteCompany(int $id);
}
