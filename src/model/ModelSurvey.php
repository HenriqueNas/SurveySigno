<?php

namespace Model;
require_once '../Connection.php';

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
     *
     * @return array|null
     */
    public function all() {
        $allSurveys = null;

        $sSql =   'SELECT * FROM ' .$this->table;
        
        $result = $this->conn->prepare($sSql);
        $result->execute();

        if ($result->rowCount() > 0) {
            $allSurveys = $result->fetchAll(PDO::FETCH_OBJ);
        }


        return $allSurveys;
    }


    /**
     * Get specific survey from database
     *
     * @param int $id
     * @return array|null
     */
    public function surveyById($id) {
        $surveyOptions = null;

        $sSql =  ' SELECT * FROM ' .$this->table
                .'  WHERE id = '. $id ;

        $result = $this->conn->prepare($sSql);
        $result->execute();

        if ($result->rowCount() > 0) {
            $surveyOptions = $result->fetch(PDO::FETCH_OBJ);
        }


        return $surveyOptions;
    }

}