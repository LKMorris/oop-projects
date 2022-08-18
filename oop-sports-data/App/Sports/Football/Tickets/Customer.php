<?php

namespace Sports\Football\Tickets;

class Customer
{
    public $billingInfo = [];

    public function __construct(array $billingInfo = [])
    {
        $this->billingInfo = $billingInfo;

    }

    public function getBillingInfo(): array
    {
        return $this->billingInfo;
    }
}