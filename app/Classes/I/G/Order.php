<?php

namespace App\I\G;

use App\I\G\GInterfaces\DiscountInterface;
use App\I\G\GInterfaces\OrderInterface;
use App\I\G\GInterfaces\PaymentInterface;
use App\I\G\GInterfaces\ShipmentInterface;

/**
 * Class Order
 */
class Order implements OrderInterface, PaymentInterface, ShipmentInterface, DiscountInterface
{
    public function getTotalPrice()
    {
        // TODO: Implement getTotalPrice() method.
    }

    public function getClientInfo()
    {
        // TODO: Implement getClientInfo() method.
    }

    public function getDiscount()
    {
        // TODO: Implement getDiscount() method.
    }

    public function getPaymentMethod()
    {
        // TODO: Implement getPaymentMethod() method.
    }

    public function getShipmentMethod()
    {
        // TODO: Implement getShipmentMethod() method.
    }
}