<?php

namespace App\Http\Controllers;

use App\Services\Car;
use App\Services\Service1;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function create(Request $request): JsonResponse
    {
        $service = new Service1();
        $params = $request->all(['name', 'price']);
        $data = $service->create($params);

        if (!$data instanceof Car) {
            return response()->json(
                [
                    'success' => false
                ]
            )->setStatusCode(400);
        }

        return response()->json(
            [
                'data' => $data,
                'success' => true
            ]
        )->setStatusCode(418);
    }

    /**
     * @param Request $request
     * @param string $id
     * @return JsonResponse
     */
    public function update(Request $request, string $id): JsonResponse
    {
        $service = new Service1();
        $params = $request->all(['name', 'price']);
        $data = $service->update($params, $id);

        if (!$data instanceof Car) {
            return response()->json(
                [
                    'success' => false
                ]
            )->setStatusCode(400);
        }

        return response()->json(
            [
                'data' => $data,
                'success' => true
            ]
        )->setStatusCode(418);
    }
}
