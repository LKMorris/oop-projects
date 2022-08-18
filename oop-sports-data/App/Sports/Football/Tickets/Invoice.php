<?php

namespace Sports\Football\Tickets;

use App\Exception\MissingBillingInfoException;

class Invoice extends \Exception
{

    public $customer;

    public function __construct(Customer $customer)
    {
        parent::__construct();
        $this->customer = $customer;

    }

    /**
     * @throws MissingBillingInfoException
     */
    public function process(float $amount): void
    {

        if ($amount <= 0){
            throw new \InvalidArgumentException('Invalid invoice amount');
        }
        if (empty($this->customer->getBillingInfo())){
            throw new MissingBillingInfoException();
        }
        echo 'Processing £' . $amount . ' invoice - ';

        sleep(1);

        echo 'Ok' . PHP_EOL;
    }
}