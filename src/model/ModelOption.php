<?php

namespace Model;
require_once '../Connection.php';

use Connection\Connection;
use PDO;

class ModelOption {

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
        $this->table = 'tboptions';
        $this->conn = Connection::getConn();
    }

    /**
     * Get options survey from database
     *
     * @param int $id
     * @return array|null
     */
    public function options($id) {
        $surveyOptions = null;

        $sSql = ' SELECT * FROM ' .$this->table
               .'  WHERE survey_id = '. $id ;

        $result = $this->conn->prepare($sSql);
        $result->execute();

        if ($result->rowCount() > 0) {
            $surveyOptions = $result->fetchAll(PDO::FETCH_OBJ);
        }


        return $surveyOptions;
    }
}