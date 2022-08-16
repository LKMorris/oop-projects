<?php

namespace Sports;

abstract class Football
{

    const SPORT_VENUE = 'Football Stadium';

    protected $_dateTime;

    public function setDateTime($dateTime): void
    {
        $this->_dateTime = $dateTime;
    }


    public function getDateTime($format = 'Y-m-d H:i:s'): string
    {
        return date($format, strtotime($this->_dateTime));
    }


}
