<?php

require_once 'Autoload/autoload.php';

$class = New Sports\Teams\MatchData();
echo $class->getSportVenue();

$class->setSportType('Soccer');
echo $class->getSportType();

$class->setTeamNames('Spurs v Liverpool');
echo $class->getTeamNames();

$class->setDateTime('2022-08-10 15:00:00');
echo $class->getDateTime();