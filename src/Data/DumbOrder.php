<?php

namespace App\Data;

use JsonException;
use DomainException;

/**
 * Implements dumb order instance
 */
final class DumbOrder extends AbstractOrder
{
    /**
     * @inheritDoc
     * @throws DomainException
     */
    protected function loadOrderData(int $id): array
    {
        if (($data = @file_get_contents(__DIR__ . "/../../mock/order.{$id}.json")) === false) {
            throw new DomainException("Couldn't fetch data for order with id=`$id` :(");
        }
        try {
            return json_decode($data, true, 512, JSON_THROW_ON_ERROR);
        } catch (JsonException $ex) {
            throw new DomainException("data for order with id=`$id` has been corrupted", 0, $ex);
        }
    }
}
