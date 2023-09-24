<?php

namespace App\DeliveryCompanies;

use App\DTO\DeliveryRequestDTO;
use App\DTO\DeliveryResponseDTO;

interface IDeliveryCompany
{

    function get(DeliveryRequestDTO $deliveryRequestDTO): ?DeliveryResponseDTO;

}