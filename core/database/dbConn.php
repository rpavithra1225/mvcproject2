<?php

namespace database;
//singleton pattern
class dbConn
{

    protected static $db;
    private function __construct()
    {
        try {
            // assign PDO object to db variable
            self::$db = new \PDO('mysql:host=' . CONNECTION . ';dbname=' . DATABASE, USERNAME, PASSWORD);
            self::$db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            //Output error - would normally log this to error file rather than output to user.
            echo "Connection Error: " . $e->getMessage();
        }
    }

    // get connection function. Static method - accessible without instantiation
    public static function getConnection()
    {
        if (!self::$db) {
            new dbConn();
        }
        return self::$db;
    }
}

?>
