<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Services\EmployeeService;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Requests\StoreEmployeeRequest;
use App\Repositories\Interfaces\ProvinceRepositoriesInterface as ProvinceRepository;
use App\Repositories\Interfaces\EmployeeRepositoriesInterface as EmployeeRepositories;
use App\Services\Interfaces\EmployeeServiceInterface;

class EmployeeController extends Controller
{
    protected $employeeService;
    protected $employeeRepositories;

    protected $provinceRepositories;
    public function __construct(
        EmployeeService $employeeService,
        ProvinceRepository $provinceRepositories,
        EmployeeRepositories $employeeRepositories,
    ){
        $this->employeeService = $employeeService; 
        $this->provinceRepositories = $provinceRepositories; 
        $this->employeeRepositories = $employeeRepositories; 
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
        
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'employees',
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
        $config['method'] = ' create';
        $template = 'backend.employee.save';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'provinces',
        ));
    }
    public function save(StoreEmployeeRequest $request){
       if($this->employeeService->create($request)){
        return redirect()->route('employee.index')->with('success', 'Thêm mới nhân viên thành công!');
       };
       return redirect()->route('employee.index')->with('error', 'Thêm mới nhân viên không thành công!');
    }
    public function edit($id){
        $employee = $this->employeeRepositories->findById($id);
        $provinces = $this->provinceRepositories->all();
        $config = [
            'css' => ['https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css'],
            'js' => [
                'https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js',
                'backend/library/location.js'
            ],
        ];
        $config['seo'] = config('apps.employee');
        $config['method'] = ' edit';
        $template = 'backend.employee.save';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'provinces',
            'employee',
        ));
    }
}