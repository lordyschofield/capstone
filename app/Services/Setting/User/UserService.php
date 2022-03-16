<?php


namespace App\Services\Setting\User;


use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserService
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Store user information
     *
     * @param $employeeData
     * @return array
     */
    public function create($employeeData): array
    {
        $password = Str::random();

        $input = [
            'employee_id' => $employeeData->id,
            'name' => $employeeData->nickname ?? $employeeData->first_name,
            'email' => $employeeData->email,
            'password' => Hash::make($password)
        ];

        $user = $this->user->create($input);

        return compact('user', 'password');
    }

    /**
     * Update user information
     *
     * @param $employeeData
     * @return mixed
     */
    public function update($employeeData)
    {
        $user = $employeeData->user;

        $user->name = $employeeData->nickname ?? $employeeData->first_name;
        $user->email = $employeeData->email;
        $user->birthday = $employeeData->birthday;
        $user->mobile_phone = $employeeData->mobile_phone;
        $user->address = $employeeData->address;
        
        return $user->save();
    }
}
