<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

class HomeController
{
    public function show(Request $request, Response $response)
   {   
      // if (Gate::allows('admin-only', Auth::User())) 
      // {
            if ($request->getPath() === 'analytics') 
            {
              return $response->withView(
                'admin/includes/analytics'
              );
            }
            
            return $response->withView('admin/dashboard', []);
      // }

      return $response->withView(
        'welcome/home'
      );

    }

}
