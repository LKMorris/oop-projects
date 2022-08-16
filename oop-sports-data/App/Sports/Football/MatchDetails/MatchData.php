<?php

namespace Sports\Football\MatchDetails;

use Sports\Football;

class MatchData extends Football
{

    public $sport;

    public function __construct(string $sport){
        $this->sport = $sport;
        return $sport;
    }

    const SPORT_VENUE = 'Villa Park';

    protected $_teamNames;

    protected $_dateTime;


    public function getSportVenue(): string
    {
        return self::SPORT_VENUE;
    }


    public function setTeamNames($name): void
    {
        $this->_teamNames = $name;
    }


    public function getTeamNames(): string
    {
        return $this->_teamNames;
    }

}
