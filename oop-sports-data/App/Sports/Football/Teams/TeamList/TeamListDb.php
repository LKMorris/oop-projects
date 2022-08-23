<?php

namespace Sports\Football\Teams\TeamList;

use Db\Resource;

class TeamListDb extends Resource
{
    public $rows = [];

	public function __construct(public Resource $resource)
	{}
    public function getTeamList(): array
    {

        $this->rows = $this->resource->directQuery("
            SELECT ft_team
            FROM football_team
            WHERE ft_team = :teamName
        ", [
            'teamName' => 'Tottenham'
        ]);

        return $this->rows;
    }
}
