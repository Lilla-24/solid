<?php

namespace App\I\B;

/**
 * Interface Orderable
 */
interface Orderable
{
    public function getPaymentMethod();
    public function getShipmentMethod();
    public function getDiscount();
    public function getTotalPrice();
    public function getClientInfo();
    public function getComment();
}