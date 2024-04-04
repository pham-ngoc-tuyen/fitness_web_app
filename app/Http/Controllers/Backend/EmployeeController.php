<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\EmployeeService;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\StoreEmployeeRequest;
use App\Repositories\Interfaces\ProvinceRepositoriesInterface as ProvinceRepository;
use App\Services\Interfaces\EmployeeServiceInterface;

class EmployeeController extends Controller
{
    protected $employeeService;

    protected $provinceRepositories;
    public function __construct(
        EmployeeService $employeeService,
        ProvinceRepository $provinceRepositories,
    ){
        $this->employeeService = $employeeService; 
        $this->provinceRepositories = $provinceRepositories; 
    }
    

    public function index(){
        $employees = $this->employeeService->getAllPaginate();

        $config = [
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
            ],
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
            ],
        ];
        
        $config['seo'] = config('apps.employee');
        $template = 'backend.employee.index';
        $genderLabels = [
            0 => 'Nam',
            1 => 'Nữ',
            2 => 'Khác',
        ];
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'employees',
            'genderLabels'
        ));
    }
    public function create(){
        $provinces = $this->provinceRepositories->all();
        $config = [
            'css' => ['https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/library/location.js'
            ],
        ];
        $config['seo'] = config('apps.employee');
        $genderLabels = [
            0 => 'Nam',
            1 => 'Nữ',
            2 => 'Khác',
        ];
        $template = 'backend.employee.create';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'provinces',
            'genderLabels'
        ));
    }
    public function store(StoreEmployeeRequest $request){
       if($this->employeeService->create($request)){
        return redirect()->route('employee.index')->with('success', 'Thêm mới nhân viên thành công!');
       };
       return redirect()->route('employee.index')->with('error', 'Thêm mới nhân viên không thành công!');
    }
}
