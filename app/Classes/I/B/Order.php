<?php

namespace App\I\B;

/**
 * Class Order
 */
class Order implements Orderable
{

    /**
     * @return string
     */
     public function getPaymentMethod()
    {
        return "Webmoney";
    }

    /**
     * @return string
     */
     public function getShipmentMethod()
    {
        return "Post";
    }

    /**
     * @return int
     */
     public function getDiscount()
    {
        return 50;
    }

    /**
     * @return int
     */
     public function getTotalPrice()
    {
        return 100;
    }

    /**
     * @return string
     */
     public function getClientInfo()
    {
        return "Email, Phone";
    }

    /**
     * @return string
     */
     public function getComment()
    {
        return "Comment";
    }
}