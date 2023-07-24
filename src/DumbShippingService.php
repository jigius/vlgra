<?php

namespace App;

use App\Data\AbstractOrder;
use App\Data\BuyerInterface;
use LogicException;

/**
 * Implements dumb service that is working with artificially prepared order's data
 */
final class DumbShippingService implements ShippingServiceInterface
{
    /**
     * Cntr
     */
    public function __construct()
    {
    }
    
    /**
     * @inheritDoc
     * @throws LogicException
     */
    public function ship(AbstractOrder $order, BuyerInterface $buyer): string
    {
        $order->load();
        if (!isset($order->data["tracking_number"])) {
            throw new LogicException("type invalid");
        }
        return $order->data["tracking_number"];
    }
}
