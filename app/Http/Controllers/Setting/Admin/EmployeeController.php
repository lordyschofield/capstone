<?php

namespace App\Http\Controllers\Setting\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Employee\EmployeeStoreRequest;
use App\Services\Setting\Employee\EmployeeService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EmployeeController extends Controller
{
    protected $employeeService;

    public function __construct(EmployeeService $employeeService)
    {
        $this->employeeService = $employeeService;
    }

    public function index()
    {
        return view('setting.admin.employee.index');
    }

    public function create(EmployeeStoreRequest $request) : Response
    {
        return $this->employeeService->create($request);
    }
}
