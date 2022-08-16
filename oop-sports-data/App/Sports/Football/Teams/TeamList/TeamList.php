<?php

namespace Sports\Football\Teams\TeamList;

class TeamList
{
    public $teams = [];

    public function fetchTeams(): array
    {

        $this->teams = [
            [
                'name' => 'Aston Villa',
                'stadium' => 'Villa Park',
                'points' => '12',
                'results' => ['W', 'W', 'L', 'W', 'W', 'L'],
                'home_away' => 'Home',
                'team_id' => '1'
            ],
            [
                'name' => 'Everton',
                'stadium' => 'Goodison Park',
                'points' => '1',
                'results' => ['L', 'L', 'L', 'L', 'L', 'D'],
                'home_away' => 'Away',
                'team_id' => '2'
            ],
            [
                'name' => 'Brighton & Hove Albion',
                'stadium' => 'The American Express Community Stadium',
                'points' => '6',
                'results' => ['D', 'D', 'D', 'L', 'L', 'W'],
                'home_away' => 'Home',
                'team_id' => '3'
            ],
            [
                'name' => 'Newcastle United',
                'stadium' => 'St. James Park',
                'points' => '9',
                'results' => ['D', 'D', 'D', 'L', 'W', 'W'],
                'home_away' => 'Away',
                'team_id' => '4'
            ],
            [
                'name' => 'Manchester City',
                'stadium' => 'Etihad Stadium',
                'points' => '18',
                'results' => ['W', 'W', 'W', 'W', 'W', 'W'],
                'home_away' => 'Home',
                'team_id' => '5'
            ],
            [
                'name' => 'AFC Bournemouth',
                'stadium' => 'Vitality Stadium',
                'points' => '8',
                'results' => ['L', 'D', 'D', 'W', 'W', 'L'],
                'home_away' => 'Away',
                'team_id' => '6'
            ],
            [
                'name' => 'Southampton',
                'stadium' => 'St. Mary\'s Stadium',
                'points' => '8',
                'results' => ['D', 'W', 'D', 'D', 'W', 'L'],
                'home_away' => 'Home',
                'team_id' => '7'
            ],
            [
                'name' => 'Leeds United',
                'stadium' => 'Elland Road',
                'points' => '9',
                'results' => ['D', 'D', 'D', 'W', 'W', 'L'],
                'home_away' => 'Away',
                'team_id' => '8'
            ],
        ];

        return $this->teams;
    }
}