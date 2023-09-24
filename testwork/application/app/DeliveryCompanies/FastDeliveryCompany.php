<?php

namespace App\DeliveryCompanies;

use App\DTO\DeliveryRequestDTO;
use App\DTO\DeliveryResponseDTO;
use App\DTO\Delivery\FastDeliveryResponseDTO;
use Carbon\Carbon;

class FastDeliveryCompany implements IDeliveryCompany
{

    private function checkTime(DeliveryRequestDTO $deliveryRequestDTO): bool
    {
        if (Carbon::now()->hour >= 18) return false;
        return true;
    }

    public function get(DeliveryRequestDTO $deliveryRequestDTO): ?DeliveryResponseDTO
    {
        if (!$this->checkTime($deliveryRequestDTO)) return null;
        if (!$fastDeliveryResponseDTO = $this->request($deliveryRequestDTO)) return null;
        return new DeliveryResponseDTO($fastDeliveryResponseDTO->price, Carbon::now()->addDays($fastDeliveryResponseDTO->period)->format('Y-m-d'), '');
    }

    //запрос к api севиса доставки.
    private function request(DeliveryRequestDTO $deliveryRequestDTO): ?FastDeliveryResponseDTO
    {
        return new FastDeliveryResponseDTO(10, 1, '');
    }

}