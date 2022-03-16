<?php


namespace App\Services\Setting\Profile;


use App\Models\Employee;
use App\Services\Setting\User\UserService;
use Illuminate\Http\Response;

class ProfileService
{
    protected $employee;
    protected $userService;

    public function __construct(Employee $employee, UserService $userService)
    {
        $this->employee = $employee;
        $this->userService = $userService;
    }

    public function getInfo($id = null)
    {
        $employeeId = $id ?? auth()->user()->employee_id;

        return $this->employee->find($employeeId);
    }

    /**
     * Update employee information and related user record
     *
     * @param $request
     * @return Response
     */
    public function update($request): Response
    {
        $this->employee = auth()->user()->employee;

        $input = $request->only($this->employee->getFillable());
        $this->employee->update($input);
        $this->employee->refresh();

        $this->userService->update($this->employee);

        return response(__('settings.profile_updated'), Response::HTTP_OK);
    }
}
