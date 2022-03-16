<?php

namespace App\Http\Controllers\Setting\Employee;

use App\Http\Controllers\Controller;
use App\Http\Requests\Setting\Profile\UpdatePersonalInfoRequest;
use App\Services\Setting\Profile\ProfileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index()
    {
        $info = $this->profileService->getInfo();

        return view('setting.employee.profile.index', compact('info'));
    }

    public function update(UpdatePersonalInfoRequest $request): Response
    {
        return $this->profileService->update($request);
    }
}
