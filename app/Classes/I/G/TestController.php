<?php

namespace App\I\G;

use App\I\G\GInterfaces\PaymentInterface;

/**
 * Class TestController
 */
class TestController
{
    /**
     * TestController constructor.
     *
     * @param PaymentInterface $order
     */
    public function __construct(PaymentInterface $order) {}
}