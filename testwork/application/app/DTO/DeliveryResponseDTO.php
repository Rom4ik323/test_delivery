<?php
declare(strict_types=1);

namespace App\DTO;

use App\DTO\ADTO;
use Carbon\Carbon;

class DeliveryResponseDTO extends ADTO
{
    public function __construct(
        public float  $price, //стоимость
        public string $date, //дата доставки в формате 2017-10-20
        public string $error //вес отправления в кг
    )
    {
    }
}