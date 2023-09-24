<?php
declare(strict_types=1);

namespace App\DTO\Delivery;

use App\DTO\ADTO;

class FastDeliveryResponseDTO extends ADTO
{
    public function __construct(
        public float  $price, //  стоимость
        public int    $period, //количество дней начиная с сегодняшнего, но после 18.00 заявки не принимаются.
        public string $error //string
    )
    {
    }


}