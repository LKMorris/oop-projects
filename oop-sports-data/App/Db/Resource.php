<?php

namespace Db;

use PDO;

class Resource
{

    /**
     * @return false|PDO
     */
    public function getConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "scoresniper";

        try {

            $connection = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
            return $connection;

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

