<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

class ProfileController
{
    public function show(Request $request, Response $response)
   {   
      // if (Gate::allows('admin-only', Auth::User())) 
      // {
            return $response->withView(
                'admin/includes/customers/customers_list'
            );
      // }

    }

    public function edit(Request $request, Response $response)
    {   
       // if (Gate::allows('admin-only', Auth::User())) 
       // {
             if($request->user_id)
             {
                // update database
             }
       // }
 
        return $response->withView(
            'admin/includes/customers/customers_edit'
        );
     }

}
