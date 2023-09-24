<?php
declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use \App\DTO\DeliveryRequestDTO;
use \App\Packages\Package;

\Carbon\Carbon::setTestNow(\Carbon\Carbon::parse('2023-09-15T15:52:01+00:00'));


$packages = [

    new Package(1,
        new \App\DeliveryCompanies\LongDeliveryCompany(),
        new DeliveryRequestDTO('10001', '10002', 10)),


    new Package(2,
        new \App\DeliveryCompanies\FastDeliveryCompany(),
        new DeliveryRequestDTO('10001', '10002', 12)),

];

$deliveryResponses = [];
foreach ($packages as $package) {
    $deliveryResponses[] = $package->getDelivery();
}

dd($deliveryResponses);