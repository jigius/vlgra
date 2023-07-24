<?php

namespace App\Data;

use LogicException;

/**
 * Implements dumb buyer instance
 */
final class DumbBuyer implements BuyerInterface
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
    public function offsetExists($offset)
    {
        throw new LogicException("has not been implemented yet");
    }
    
    /**
     * @inheritDoc
     * @throws LogicException
     */
    public function offsetGet($offset)
    {
        throw new LogicException("has not been implemented yet");
    }
    
    /**
     * @inheritDoc
     * @throws LogicException
     */
    public function offsetSet($offset, $value)
    {
        throw new LogicException("has not been implemented yet");
    }
    
    /**
     * @inheritDoc
     * @throws LogicException
     */
    public function offsetUnset($offset)
    {
        throw new LogicException("has not been implemented yet");
    }
}
