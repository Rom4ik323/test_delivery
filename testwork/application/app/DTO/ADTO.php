<?php
declare(strict_types=1);

namespace App\DTO;

abstract class ADTO
{

    public function toArray(): array
    {
        return get_object_vars($this);
    }

    public function toJson(): string
    {
        return json_encode($this->toArray());
    }
}