<?php

require_once 'Autoload/Loader.php';
$loader = new \Autoload\Loader();
// requires anything that is "callable"
spl_autoload_register($loader);

use Sports\Football\Tickets\Invoice;
use Sports\Football\Tickets\Customer;

$home = new Sports\Football\Teams\HomeTeam();
$away = new Sports\Football\Teams\AwayTeam();

$class = New Sports\Football\MatchDetails\MatchData('Soccer');
$class->setTeamNames('Aston Villa v Everton');
$class->setDateTime('2022-08-13 15:00:00');

//$invoice = new Invoice(new Customer());
//
//try {
//    $this->process(25);
//} catch (\App\Exception\MissingBillingInfoException $e){
//    echo $e->getMessage() . ' ' . $e->getFile() . ' ' . $e->getLine() . PHP_EOL;
//} catch (\InvalidArgumentException $e){
//    echo 'Invalid Argument Exception' . PHP_EOL;
//}

?>

<div class="container match-list">

    <div class="versus"><h4>VS</h4></div>
    <div class="container-contents">
        <h3>Home</h3>
        <div class="home-team"><?php print_r($home->setHomeTeams()); ?></div>
    </div>

    <div class="container-contents">
        <h3>Away</h3>
        <div class="away-team"><a href=""><?php print_r($away->setAwayTeams()); ?></a></div>
    </div>

</div>


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

<style>
    .container {
        width: 600px;
        background-color: lightgray;
        border-radius: 10px;
        margin: 20px auto;
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

    .match-list{
        text-align: center;
    }

    .versus{
        position: relative;
        top: 100px;
        background: white;
    }

    .versus h4 {
        position: relative;
        left: 20px;
        font-style: italic;
        color: red;
        margin: 0;
    }

    .container-contents{
        display: inline-block;
        text-align: center;
        padding: 20px;
    }

    .match-team-list {
        padding: 10px;
        border-bottom: 1px solid white;
    }

    .match-team-list:nth-last-child(1) {
        border-bottom: none;
    }
</style>
