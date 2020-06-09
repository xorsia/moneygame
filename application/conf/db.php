<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 09.06.2020
 * Time: 12:55
 */

class DB {
    const USER = "root";
    const PASS = '';
    const HOST = "localhost";
    const DB = "moneygame";

    public static function connectToDb(){
        $user = self::USER;
        $pass = self::PASS;
        $host = self::HOST;
        $db = self::DB;

        $connecting = new mysqli($host, $user, $pass,$db);

        if ($connecting->connect_error) {
            die($connecting->connect_error);
        }
        return $connecting;
    }
}