<?php

namespace App\Services;

use App\Models\Car;
use App\Repositories\interfaces\ICarRepository;
use Illuminate\Database\Eloquent\Collection;

class CarService
{
    public function __construct(
        protected ICarRepository $carRepo
    )
    {

    }

    /**
     * @return Collection<Car>
     */
    public function getAll(): Collection
    {
        return $this->carRepo->getAll();
    }
}
