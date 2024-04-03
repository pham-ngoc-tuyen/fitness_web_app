<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\DistrictRepositoriesInterface as DistrictRepositories;

class LocationController extends Controller
{
    protected $districtRepositories;

    public function __construct(DistrictRepositories $districtRepositories)
    {
        $this->districtRepositories = $districtRepositories;
    }

    public function getLocation(Request $request)
        {
            $province_id = $request->input('province_id');
            $districts = $this->districtRepositories->findDistrictProvinceID($province_id); 
            $response = [
                'html' => $this->renderHtml($districts)
            ];
            return response()->json($response); 
        }
    public function renderHtml($districts ){
        $html ='<option value="0">[Chọn Quận/Huyện]</option>';
        foreach ($districts as $district){
            $html .= '<option value="'.$district->code.'">'.$district->name.'</option>';
        }
        return $html;
    }    
}

