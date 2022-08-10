<?php

namespace Sports\Teams;

class MatchData
{

    const SPORT_VENUE = 'Tottenham Hotspur Stadium';

    protected $_sportType;

    protected $_teamNames;

    protected $_dateTime;


    public function getSportVenue(): string
    {
        return self::SPORT_VENUE;
    }


    public function setSportType($type): void
    {
        $this->_sportType = $type;
    }


    public function getSportType(): string
    {
        return $this->_sportType;
    }


    public function setTeamNames($name): void
    {
        $this->_teamNames = $name;
    }


    public function getTeamNames(): string
    {
        return $this->_teamNames;
    }


    public function setDateTime($dateTime): void
    {
        $this->_dateTime = $dateTime;
    }


    public function getDateTime(): string
    {
        return $this->_dateTime;
    }




}
