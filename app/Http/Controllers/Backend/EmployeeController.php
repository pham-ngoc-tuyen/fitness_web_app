<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use Illuminate\Pagination\LengthAwarePaginator;
class EmployeeController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $employees = Employee::paginate(15);

        $config = $this ->config();
            
        $template = 'backend.employee.index';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'employees'
        ));
    }
    public function create(){
        $template = 'backend.employee.create';
        return view('backend.dashboard.layout',compact(
            'template',
        ));
    }
    private function config(){
        return [
            'js' => [
                'backend/js/plugins/switchery/switchery.js',
            ],
            'css'=>[
                'backend/css/plugins/switchery/switchery.css',
            ],
        ];
    }
}
