<?php

namespace App\Services\Auth;

use Exception;

class LoginService
{

    public function execute(array $credentials): array
    {

        if(!$token = auth()->setTTL(6*60)->attempt($credentials))
        throw new Exception('Not authorized, 401');
        
        return[
            'acess_token' => $token,
            'token_type' => 'Bearer',
            'expires_in' => auth()->factory()->getTTL(),
            'user' => auth()->user(),
        ];
    }
}


?>