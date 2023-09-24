<?php

namespace App\Packages;

use App\DeliveryCompanies\IDeliveryCompany;
use App\DTO\DeliveryRequestDTO;
use App\DTO\DeliveryResponseDTO;

abstract class APackage
{
    public function __construct(public int $package_id, public IDeliveryCompany $deliveryCompany, public DeliveryRequestDTO $deliveryRequestDTO){

    }

    public function getDelivery(): ?DeliveryResponseDTO{
        return $this->deliveryCompany->get($this->deliveryRequestDTO);
    }

}