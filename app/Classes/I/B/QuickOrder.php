<?php

namespace App\I\B;

/**
 * Class QuickOrder
 */
class QuickOrder implements Orderable
{

    /**
     * @throws \Exception
     */
    public function getPaymentMethod()
    {
        throw new \Exception("Error payment");
    }

    /**
     * @throws \Exception
     */
    public function getShipmentMethod()
    {
        throw new \Exception("Error shipment");
    }

    /**
     * @throws \Exception
     */
    public function getDiscount()
    {
        throw new \Exception("Error Discount");
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
        return "Phone";
    }

    /**
     * @throws \Exception
     */
    public function getComment()
    {
        throw new \Exception("Error comment");
    }
}