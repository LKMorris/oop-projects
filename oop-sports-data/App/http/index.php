<?php
require_once('App/Sports/Teams/MatchData.php');
$class = New App\Sports\Teams\MatchData();
var_dump($class->getSportVenue());

$class->setSportType('Soccer');
var_dump($class->getSportType());

$class->setTeamNames('Spurs v Liverpool');
var_dump($class->getTeamNames());

$class->setDateTime('2022-08-10 15:00:00');
var_dump($this->getDateTime());