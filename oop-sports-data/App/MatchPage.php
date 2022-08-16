<?php

$class = New Sports\Football\MatchDetails\MatchData('Soccer');
$class->setTeamNames('Aston Villa v Everton');
$class->setDateTime('2022-08-13 15:00:00');

?>

<div class="container">
    <div class="match-info">
        <h3>Sport Type: </h3><p><?php print_r($class->__construct('Soccer')); ?></p>
    </div>
    <div class="match-info">
        <h3>Teams: </h3><p><?php print_r($class->getTeamNames()); ?></p>
    </div>
    <div class="match-info">
        <h3>Venue: </h3><p><?php print_r($class->getSportVenue()); ?></p>
    </div>
    <div class="match-info">
        <h3>Kick-Off:</h3><p><?php print_r($class->getDateTime()); ?></p>
    </div>
    <div class="match-info">
        <h3>Kick-Off (formatted): </h3><p><?php print_r($class->getDateTime('j F Y H:i')); ?></p>
    </div>
</div>
