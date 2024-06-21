<?php

namespace App\Repositories\interfaces;

use App\Models\Car;
use Illuminate\Database\Eloquent\Collection;

interface ICarRepository
{
    /**
     * @return Collection<Car>
     */
    public function getAll(): Collection;

    public function setConnection(string $connection): void;
}
