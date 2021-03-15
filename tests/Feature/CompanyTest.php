<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CompanyTest extends TestCase
{
    //use  RefreshDatabase;

    public function test_admin_can_add_a_company()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $data = $this->companyData();

        $response = $this->actingAs($superUser)->postJson('/api/admin/company', $data);
        $response->assertStatus(200);
    }

    public function test_get_all_companies_if_route_exist()
    {
        $response = $this->getJson('/api/admin/company');

        $response->assertStatus(200);
        $response->assertOk();
    }

    public function test_can_view_all_companies()
    {
        $this->withoutExceptionHandling();

        $this->createCompany();

        $response = $this->getJson('/api/admin/company');

        $response->assertStatus(200);
    }

    public function test_admin_can_view_single_company()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $company = $this->createCompany();

        $response = $this->actingAs($superUser)->getJson('/api/admin/company/' . $company->id);

        $response->assertStatus(200);
    }

    public function test_admin_can_update_a_company()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $company = $this->createCompany();

        $data = $this->companyData();

        $response = $this->actingAs($superUser)->putJson('/api/admin/company/' . $company->id, $data);
        $response->assertStatus(200);
    }

    public function test_admin_can_delete_a_company()
    {
        $this->withoutExceptionHandling();
        $superUser = static::$user;

        $company = $this->createCompany();

        $response = $this->actingAs($superUser)->deleteJson('/api/admin/company/' . $company->id);
        $response->assertStatus(200);
        $this->assertDatabaseMissing('companies', ['id' => $company->id]);
    }
}
