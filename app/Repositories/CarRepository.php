<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\interfaces\ICarRepository;
use Illuminate\Database\Eloquent\Collection;

class CarRepository implements ICarRepository
{
    /**
     * @return Collection<Car>
     */
    public function getAll(): Collection
    {
        return Car::all();
    }
}
