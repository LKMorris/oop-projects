<?php

namespace Sports\Football\Teams;

use Sports\Football\Teams\TeamList\TeamList;

class HomeTeam extends TeamList
{

    public function setHomeTeams(): string
    {
        $html = '';
        $homeTeams = $this->fetchTeams();
        foreach ($homeTeams as $homeTeam){
            $id = $homeTeam['team_id'];
            if($homeTeam['home_away'] == 'Home'){
                $html .= '<div class="match-team-list"><a href="Sports/' . $id . '/MatchPage.php"><h4>' . $homeTeam['name'] . '</a></h4>';
                $html .= '<div class="previous-results"><span>record: </span>' . implode('', $homeTeam['results']);
                $html .= '</div>';
                $html .= '</div>';
            }
        }
        return $html;
    }
}


