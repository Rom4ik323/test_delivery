<?php
declare(strict_types=1);

namespace App\DTO;

use App\DTO\ADTO;

class DeliveryRequestDTO extends ADTO
{
    public function __construct(
        public string $sourceKladr, //кладр откуда везем
        public string $targetKladr, //кладр куда везем
        public float  $weight //вес отправления в кг
    )
    {
    }

}