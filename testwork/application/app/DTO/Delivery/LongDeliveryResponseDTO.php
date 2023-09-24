<?php
declare(strict_types=1);

namespace App\DTO\Delivery;

use App\DTO\ADTO;

class LongDeliveryResponseDTO extends ADTO
{
    private float  $price = 150;
    public function __construct(
        public float  $coefficient, //коэффициент (конечная цена есть произведениебазовой стоимости и коэффициента)
        public string $date, //дата доставки в формате 2017-10-20
        public string $error //string
    )
    {
    }

    public function getPrice():float{
        return $this->price*$this->coefficient;
    }

}