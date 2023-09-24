<?php
namespace App\DeliveryCompanies;

use App\DTO\DeliveryRequestDTO;
use App\DTO\DeliveryResponseDTO;
use App\DTO\Delivery\FastDeliveryResponseDTO;
use App\DTO\Delivery\LongDeliveryResponseDTO;
use Carbon\Carbon;

class LongDeliveryCompany implements IDeliveryCompany
{
    public function get(DeliveryRequestDTO $deliveryRequestDTO): ?DeliveryResponseDTO
    {
        if(!$longDeliveryResponseDTO=$this->request($deliveryRequestDTO)) return null;
        return new DeliveryResponseDTO($longDeliveryResponseDTO->getPrice(),Carbon::parse($longDeliveryResponseDTO->date)->format('Y-m-d'),'');
    }

    //запрос к api севиса доставки.
    private function request(DeliveryRequestDTO $deliveryRequestDTO): ?LongDeliveryResponseDTO
    {
        return new LongDeliveryResponseDTO(1,Carbon::now()->addDays(4)->format('Y-m-d'),'');
    }
}