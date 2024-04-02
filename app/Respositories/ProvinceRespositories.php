<?php

namespace App\Respositories;

use App\Models\Province;
use App\Respositories\Interface\ProvinceRespositoriesInterface;


class ProvinceRespositories implements ProvinceRespositoriesInterface{
    public function all(){
        return Province::all();
    }
}