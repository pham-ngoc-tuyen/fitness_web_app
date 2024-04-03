<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Pagination\LengthAwarePaginator;

use App\Repositories\Interfaces\ProvinceRepositoriesInterface as ProvinceRepository;
class EmployeeController extends Controller
{
    protected $provinceRepositories;
    public function __construct(
        ProvinceRepository $provinceRepositories,
    ){
        $this->provinceRepositories = $provinceRepositories; 
    }
    

    public function index(){
        $employees = Employee::paginate(15);

        $config = [
            'css'=>[
                'backend/css/plugins/switchery/switchery.css',
            ],
            'js' => 
                'backend/js/plugins/switchery/switchery.js',
            ];
        $config['seo'] = config('apps.employee');
        $template = 'backend.employee.index';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'employees'
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

        $template = 'backend.employee.create';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'provinces',
        ));
    }
}
