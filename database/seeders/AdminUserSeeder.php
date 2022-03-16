<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use App\Services\Setting\Employee\EmployeeService;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::truncate();

        if (app()->environment('local')) {
            $this->createLocalAdmins();
        }
    }

    private function createLocalAdmins()
    {
        $admins = Employee::factory(2)->create();

        $admins->each(
            function (Employee $employee) {
                User::create([
                    'employee_id' => $employee->id,
                    'name' => $employee->nickname ?? $employee->first_name,
                    'email' => $employee->email,
                    'password' => Hash::make('secret'),
                    'role' => User::ROLE_ADMIN
                ]);
            }
        );
    }
}
