<?php

namespace App\Services;

use App\Services\Interfaces\EmployeeServiceInterface;
use App\Repositories\Interfaces\EmployeeRepositoriesInterface as EmployeeRepositories;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;

/**
 * Class EmployeeService
 * @package App\Services
 */
class EmployeeService implements EmployeeServiceInterface
{
    protected $employeeRepositories;
    public function __construct(
        EmployeeRepositories $employeeRepositories
    ){
        $this->employeeRepositories = $employeeRepositories;
    }
    public function getAllPaginate(){
        $employees = $this->employeeRepositories->getAllPaginate();
        return $employees;
    }
    public function create($request)
{
    DB::beginTransaction();
    try {
        $payload = $request->except('_token','send','re_password');
        $carbonDate = Carbon::createFromFormat('Y-m-d', $payload['day_of_birth']);
        $payload['day_of_birth'] = $carbonDate->format('Y-m-d H:i:s');
        $payload['password'] = Hash::make($payload['password']);
        
        $gender = $request->input('gender');
        $genderValue = ($gender == 'male') ? 0 : ($gender == 'female' ? 1 : 2);
        $genderLabels = [
            0 => 'Nam',
            1 => 'Nữ',
            2 => 'Khác',
        ];

        $payload['gender'] = $genderValue;

        // Tiếp tục thêm dữ liệu vào cơ sở dữ liệu
        $employee = $this->employeeRepositories->create($payload);
        DB::commit();
        return [
            'employee' => $employee,
            'genderLabels' => $genderLabels
        ];
    } catch (\Exception $e) {
        DB::rollBack();
        echo $e->getMessage();die();
        return false;
    }
}

}