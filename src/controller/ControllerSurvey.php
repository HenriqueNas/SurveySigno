<?php

namespace Controller;
require '../model/ModelSurvey.php';

use Model\ModelSurvey;

class ControllerSurvey {

    /**
     * @var ModelSurvey
     */
    private $modelSurvey;

    /**
     * ControllerSurvey constructor.
     * @param ModelSurvey $modelSurvey
     */
    public function __construct() {
        $this->modelSurvey = new ModelSurvey();
    }

    /**
     * Get all surveys
     */
    public function getAllSurveys() {
        $surveys[] = $this->modelSurvey->all();

        return null;
    }
}