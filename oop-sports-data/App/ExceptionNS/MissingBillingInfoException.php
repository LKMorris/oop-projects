<?php

namespace ExceptionNS;

class MissingBillingInfoException extends \Exception
{
    protected $message = 'Missing Billing Information';
}