<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

class HomeController
{
    public function show(Request $request, Response $response)
   {   
  
      return $response->withView(
        '/home'
      );

    }

}
