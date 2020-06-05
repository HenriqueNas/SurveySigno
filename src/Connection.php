<?php
namespace Connection;

use Exception;
use PDO;

/**
 * Singleton design pattern that
 * implements database connection
 *
 * @author Henrique Nascimento
 */
class Connection {
    // Singleton Instance
    private static $instance;

    // Docker DB
    const HOST = "127.0.0.1"; //localhost
    const PORT = "3306";
    const USER = "root";
    const PASS = "senha";
    const DB = "survey";

    /*
     * Method with singleton instance logic
     */
    public static function getConn()
    {
        if (!isset(self::$instance)) {
            try {
                self::$instance = new PDO(
                    "mysql:dbname=" .self::DB
                    ."; user=" .self::USER
                    ."; password=" .self::PASS
                    ."; host=" .self::HOST
                    ."; port=" . self::PORT
                );
            } catch (Exception $e) {
                echo '<script> console.log(\'Error in database connection.\')</script>';
            }
        }
        return self::$instance;
    }

}

