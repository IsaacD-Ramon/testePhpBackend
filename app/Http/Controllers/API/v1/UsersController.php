<?php

namespace App\Http\Controllers\API\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create(Request $request)
    {
        // Cadastrar no banco de dados na tabela users os valores de todos os campos
       User::create($request->all());

        return response()->json($request, 201);
    }
}
