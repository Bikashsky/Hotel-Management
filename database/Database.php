<?php

/**
 * Created by PhpStorm.
 * User: Bikash
 * Date: 6/12/2017
 * Time: 8:55 AM
 */
class Database
{

    private $localhost;
    private $username;
    private $password;
    private $database;

    public function Database() {
        $this -> localhost = "localhost";
        $this -> username = "root";
        $this -> password = "";
        $this -> database = "hotelmgmt";
    }

    public function getConnection() {
        $sql = new mysqli($this -> localhost, $this -> username, $this -> password, $this -> database)
            or die($sql -> error);

        return $sql;
    }
}