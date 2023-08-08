<?php

class Beverage
{
    public function __construct(
                                public string $color,
                                public float $price,
                                public string $temperature = 'cold') {}
    public function getInfo(): string
    {
        return "This beverage is $this->temperature and $this->color.";
    }
}

$cola = new Beverage('black', 2.0);
echo $cola->getInfo();

?>
