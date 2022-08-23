<?php

namespace Db;

use PDO;

class Resource
{

	public $connection = NULL;
	public function __construct(public array $config)
	{}
    /**
     * @return false|PDO
     */
    public function getConnection()
    {

		if (!empty($this->connection)) return $this->connection;
        $servername = $this->config['servername'];
        $username   = $this->config['username'];
        $password   = $this->config['password'];
        $dbname     = $this->config['dbname'];

        try {

            $this->connection = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
            return $this->connection;

        } catch (PDOException $e) {
            echo 'PDOException: ' . $e->getMessage();
        } catch (Exception $e) {
            echo 'Exception: ' . $e->getMessage();
        }

        return false;
    }

    /**
     * @param $query
     * @param array $binds
     * @return array|false
     */
    public function directQuery($query, array $binds = [])
    {
        if(count($binds)) {
            return $this->pdoQuery($query, $binds);
        }

        $dbc = $this->getConnection();
        $stmt = $dbc->prepare($query);
        $return_rows = array();
        if($stmt->execute()) {
            while ($stmtrow = $stmt->fetch()) {
                $return_rows[] = $stmtrow;

            }
            return $return_rows;
        }
        return false;
    }

    /**
     * @param $query
     * @param $binds
     * @return array|false
     */
    public function pdoQuery($query, $binds)
    {
        $dbc = $this->getConnection();
        $stmt = $dbc->prepare($query);
        $return_rows = array();
        if($stmt->execute($binds)) {
            while ($stmtrow = $stmt->fetch()) {
                $return_rows[] = $stmtrow;

            }
            return $return_rows;
        }
        return false;
    }

}

