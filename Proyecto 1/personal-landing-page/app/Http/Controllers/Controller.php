<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    public function fillForm($fill_id = null){

        if(!empty($fill_id)){
            //retorna el formuario lleno
            
        }
        else{
            //retorna el formulario vacio
        }
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
