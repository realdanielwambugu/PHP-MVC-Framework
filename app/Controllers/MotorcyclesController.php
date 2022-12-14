<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

class MotorcyclesController
{
    public function show(Request $request, Response $response)
   {   
      // if (Gate::allows('admin-only', Auth::User())) 
      // {
            return $response->withView(
                'admin/includes/motorcycles/motorcycles_list'
            );
      // }

    }

}
