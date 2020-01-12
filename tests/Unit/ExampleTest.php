<?php

namespace Tests\Unit;

use App\Employee;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use App\User;

class EmployeesDatatablesControllerTest extends TestCase
{
    use RefreshDatabase;

    public function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');
    }

    /**
     * Non-authenticated user should be redirected to login
     *
     * @return void
     */
    public function testOnlyAuthenticatedCanAccess()
    {
        $response = $this->get('datatables/employees');
        $response->assertRedirect('/login');
    }

    /**
     * Authenticated users should receive employees json
     *
     * @return void
     */
    public function testAuthenticatedUserCanSeeJson()
    {

        factory(Employee::class)->create();

        $user = User::first();
        $this->actingAs($user);

        $response = $this->get('datatables/employees');
        $response->assertStatus(200);

        $response->assertJsonStructure([
            'draw',
            'recordsTotal',
            'recordsFiltered',
            'data' => [
                '*' => [
                    "id",
                    "company_id",
                    "name",
                    "last_name",
                    "email",
                    "phone",
                    "created_at",
                    "updated_at",
                    "actions",
                ],
            ],
        ]);
    }
}
