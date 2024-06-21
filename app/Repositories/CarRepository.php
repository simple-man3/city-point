<?php

namespace App\Repositories;

use App\Models\Car;
use App\Repositories\interfaces\ICarRepository;
use Illuminate\Database\Eloquent\Collection;

class CarRepository implements ICarRepository
{
    public function __construct(
        protected string $connection = ''
    )
    {
        $this->connection = config('database.default');
    }

    /**
     * @return Collection<Car>
     */
    public function getAll(): Collection
    {
        return Car::on($this->connection)->get();
    }

    public function setConnection(string $connection): void
    {
        $this->connection = $connection;
    }
}
