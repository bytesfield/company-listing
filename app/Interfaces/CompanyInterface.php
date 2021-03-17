<?php

namespace App\Interfaces;

use App\Http\Requests\CompanyRequest;

interface CompanyInterface
{
    /**
     * Get all Companies
     * 
     * @param integer $length
     * @method  GET api/admin/company
     * @access  public
     */
    public function getAllCompanies(int $length);

    /**
     * Get Company By ID
     * 
     * @param integer $id
     * 
     * @method  GET api/admin/company/{id}
     * @access  public
     */
    public function getCompanyById(int $id);


    /**
     * Store Company
     * 
     * @param  \App\Http\Requests\CompanyRequest $request
     * @param  integer $id
     * 
     * @method  POST api/admin/company
     * @access  public
     */
    public function saveCompany(CompanyRequest $request);

    /**
     * Update Company
     * 
     * @param  \App\Http\Requests\CompanyRequest $request
     * @param  integer $id
     * 
     * @method  PUT api/admin/company/{id}
     * @access  public
     */
    public function updateCompany(CompanyRequest $request, int $id);


    /**
     * Delete Company
     * 
     * @param integer $id
     * 
     * @method  DELETE  api/admin/company/{id}
     * @access  public
     */
    public function deleteCompany(int $id);
}
