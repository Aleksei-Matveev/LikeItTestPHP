<?php

class DB
{
    private static PDO $instances;

    protected function __construct(){}

    public static function getInstance(): PDO
    {
        if (!isset(self::$instances)) {
            try {
                self::$instances = new PDO('mysql:dbname=review;host=localhost', 'root', '');
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        return self::$instances;
    }
}