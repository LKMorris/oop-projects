<?php

require_once 'Autoload/Loader.php';
$loader = new \Autoload\Loader();
// requires anything that is "callable"
spl_autoload_register($loader);

$class = New Sports\Teams\MatchData();
$class->setSportType('Soccer');
$class->setTeamNames('Spurs v Liverpool');
$class->setDateTime('2022-08-10 15:00:00');
?>

<div class="container">
    <div class="match-info">
        <h3>Sport Type: </h3><p><?php print_r($class->getSportType()); ?></p>
    </div>
    <div class="match-info">
        <h3>Venue: </h3><p><?php print_r($class->getSportVenue()); ?></p>
    </div>
    <div class="match-info">
        <h3>Teams: </h3><p><?php print_r($class->getTeamNames()); ?></p>
    </div>
    <div class="match-info">
        <h3>Kick-Off:</h3><p><?php print_r($class->getDateTime()); ?></p>
    </div>
    <div class="match-info">
        <h3>Kick-Off (formatted): </h3><p><?php print_r($class->getDateTime('j F Y H:i')); ?></p>
    </div>
</div>

<style>
    .container {
        width: 400px;
        background-color: lightgray;
        border-radius: 10px;
    }

    .match-info{
        padding: 10px;
        border-bottom: 1px solid white;
    }

    .match-info:nth-last-child(1){
        border-bottom: none;
    }

    h3, p {
        display: inline-block;
        width: 50%;
    }
</style>
