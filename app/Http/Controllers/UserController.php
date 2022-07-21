<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * first_name - string
     * last_name - string
     * email - string, unique
     * password - string, min 8 chars
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        // @TODO: Tutaj

        return response()->json();
    }

    /**
     * @param Request $request
     * id
     * first_name - string
     * last_name - string
     * email - string, unique
     * @return JsonResponse
     */
    public function update(Request $request): JsonResponse
    {
        // @TODO: Tutaj

        return response()->json();
    }
}
