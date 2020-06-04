<?php

namespace Model;
require '../Connection.php';

use Connection\Connection;
use PDO;

class ModelSurvey {

    /**
     * Specify what the table name
     * for this model
     *
     * @var string
     */
    private $table;

    /**
     * Connection with database
     */
    private $conn;

    /**
     * ModelSurvey constructor.
     */
    public function __construct() {
        $this->table = 'tbsurveys';
        $this->conn = Connection::getConn();
    }

    /**
     * Get all surveys from database
     */
    public function all() {
        $sSql =   'SELECT * FROM ' .$this->table;

        $result = $this->conn->prepare($sSql);
        $result->execute();
        return $result->fetch(PDO::FETCH_OBJ);
    }


}