<?php

namespace Controller;
require_once '../model/ModelOption.php';
require_once '../model/ModelSurvey.php';
require_once '../utils/SurveyUtils.php';

use Model\ModelOption;
use Model\ModelSurvey;
use Util\SurveyUtils;

class ControllerSurvey {

    /**
     * @var ModelSurvey
     */
    private $modelSurvey;

    /**
     * @var ModelOption
     */
    private $modelOption;

    /**
     * ControllerSurvey constructor.
     */
    public function __construct() {
        $this->modelSurvey = new ModelSurvey();
        $this->modelOption = new ModelOption();
    }

    /**
     * Get all surveys
     */
    public function getAllSurveys() {
        $surveys = array();

        foreach ($this->modelSurvey->all() as $survey) {
            array_push($surveys, self::parseSurvey($survey));
        }

        return $surveys;
    }

    /**
     * Get options for a survey
     * @param  int $id
     * @return array|null
     */
    public function getSurveyOptions($id) {
        $options = array();

        foreach ($this->modelOption->options($id) as $option) {
            array_push($options, self::parseOptions($option));
        }

        return $options;
    }

    /**
     * Get a specific survey by id
     * @param  int $id
     * @return array|null
     */
    public function getSurveyById($id) {
        return self::parseSurvey($this->modelSurvey->surveyById($id));
    }

    private static function parseSurvey($survey) {
        $id = $survey->id;
        $title = $survey->title;
        $begin = SurveyUtils::parseDate($survey->begindate);
        $end   = SurveyUtils::parseDate($survey->enddate);

        $dateCompare = SurveyUtils::dateCompare($survey->begindate, $survey->enddate);
        $class  = $dateCompare['class'];
        $status = $dateCompare['status'];

        return [
            'id' => $id,
            'title' => $title,
            'begin' => $begin,
            'end' => $end,
            'class' => $class,
            'status' => $status
        ];
    }

    private static function parseOptions($option) {
        $name = $option->name;
        $votes = $option->votes;

        return [
            'name' => $name,
            'votes' => $votes,
        ];
    }

}