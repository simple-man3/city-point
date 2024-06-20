<?php

namespace App\Http\Resources;

use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

/** @mixin Car */
class CarResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'RegNumber' => $this->RegNumber,
            'VIN' => $this->VIN,
            'Model' => $this->Model,
            'Brand' => $this->Brand,
        ];
    }


}
