<?php

namespace App\Http\Controllers;

use App\Http\Resources\CarResource;
use App\Services\CarService;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;

class CarController extends Controller
{
    public function getAll(CarService $carService): AnonymousResourceCollection
    {
        $cars = $carService->getAll();

        return CarResource::collection($cars)->additional([
            'meta' => [
                'total_count' => $cars->count()
            ]
        ]);
    }
}
