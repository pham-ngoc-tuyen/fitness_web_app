<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function __construct(){

    }

    public function index(){
        $employee = Employee::all();
        $config = $this ->config();
            
        $template = 'backend.employee.index';
        return view('backend.dashboard.layout',compact(
            'template',
            'config',
            'employee'
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
