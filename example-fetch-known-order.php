<?php

require_once __DIR__ . "/vendor/autoload.php";

var_dump(
    (new App\DumbShippingService())
        ->ship(
            new App\Data\DumbOrder(16400),
            new App\Data\DumbBuyer()
        )
);
