<?php

namespace Sports\Football\Teams;

use Sports\Football\Teams\TeamList\TeamList;

class AwayTeam extends TeamList
{

    public function setAwayTeams(): string
    {
        $html = '';
        $awayTeams = $this->fetchTeams();
        foreach ($awayTeams as $awayTeam){
            $id = $awayTeam['team_id'];
            if($awayTeam['home_away'] == 'Away'){
                $html .= '<div class="match-team-list"><h4><a href="Sports/' . $id . '/MatchPage.php">' . $awayTeam['name'] . '</a></h4>';
                $html .= '<div class="previous-results"><span>record: </span>' . implode('', $awayTeam['results']);
                $html .= '</div>';
                $html .= '</div>';
            }
        }
        return $html;
    }
}