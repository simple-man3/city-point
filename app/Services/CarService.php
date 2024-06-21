<?php

namespace App\Services;

use App\Models\Car;
use App\Repositories\interfaces\ICarRepository;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\QueryException;

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
        try {
            return $this->carRepo->getAll();
        } catch (QueryException $e) {
            if ($e->getCode() === 2002) {
                $this->carRepo->setConnection('slave');
                return $this->carRepo->getAll();
            }

            throw $e;
        }
    }
}
