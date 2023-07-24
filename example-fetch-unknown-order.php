<?php

require_once __DIR__ . "/vendor/autoload.php";

var_dump(
    (new App\DumbShippingService())
        ->ship(
            new App\Data\DumbOrder(100),
            new App\Data\DumbBuyer()
        )
);
