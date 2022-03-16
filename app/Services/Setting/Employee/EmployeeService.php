<?php


namespace App\Services\Setting\Employee;


use App\Jobs\Auth\SendEmployeeAccessMailJob;
use App\Models\Employee;
use App\Services\Setting\User\UserService;
use Illuminate\Http\Response;

class EmployeeService
{
    protected $employee;
    protected $userService;

    public function __construct(Employee $employee, UserService $userService)
    {
        $this->employee = $employee;
        $this->userService = $userService;
    }

    /**
     * Store employee information
     * Then create related user record and send email for user access
     *
     * @param $request
     * @return Response
     */
    public function create($request): Response
    {
        $input = $request->only($this->employee->getFillable());
        $employee = $this->employee->create($input);

        // create user record
        $userInfo = $this->userService->create($employee);
        // send employee access mail
        SendEmployeeAccessMailJob::dispatch($employee, $userInfo['password']);

        return response(__('settings.employee_created'), Response::HTTP_OK);
    }
}
