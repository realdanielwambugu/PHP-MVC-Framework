<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\User;

class LoginController extends Controller
{
    public function authenticate(Request $request, Response $response)
    {
        if ($error = $this->isInvalid('login', $request))
        {
            return $error;
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attemptWith($credentials))
        {
            return $response->withAjaxRedirect('/');
        }

        return $response->withError('wrong email or password');
    }

}
