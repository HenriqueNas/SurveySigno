<?php

namespace View;
use Controller\ControllerSurvey;

require_once '../controller/ControllerSurvey.php';

class ViewSurvey {

    /**
     * @var ControllerSurvey
     */
    private $controllerSurvey;

    /**
     * ViewSurvey constructor.
     */
    public function __construct() {
        $this->controllerSurvey = new ControllerSurvey();
    }

    /**
     * Parse database surveys to mount
     * html survey info
     *
     * @return string surveys info as html
     */
    public static function surveysInfo() {
        $surveys = (new ControllerSurvey())->getAllSurveys();
        $html = '';

        foreach ($surveys as $survey) {
            $html .=
                <<<HTML
                <tr class="pointer" onclick="window.location = '../pages/Survey.php?survey={$survey['id']}'" ">
                    <td class="title pointer">{$survey['title']}</td>
                    <td class="{$survey['class']} pointer">{$survey['status']}</td>
                    <td>{$survey['begin']}</td>
                    <td>{$survey['end']}</td>
                </tr>
            HTML;
        }

        return $html;
    }


    /**
     * Parse database surveys to mount
     * html survey card
     *
     * @param  int $id
     * @return string surveys info as html
     */
    public static function surveysCard($id) {
        $controllerSurvey = new ControllerSurvey();

        $survey  = $controllerSurvey->getSurveyById($id);
        $options = $controllerSurvey->getSurveyOptions($id);

        $voteComponent = '';

        foreach ($options as $option) {
            $voteComponent .=
                <<<HTML
                    <div>
                        <button class="pointer">{$option['name']}</button>
                        <span>{$option['votes']} votos</span>
                    </div>
                HTML;
        }

        $html = <<<HTML
            <div id="title-survey">
                {$survey['title']}
            </div>

            <div id="dates">
                <div>
                    <span>Início</span>
                    <span>{$survey['begin']}</span>
                </div>
                <div>
                    <span>Fim</span>
                    <span>{$survey['end']}</span>
                </div>
            </div>

            <div id="options">
                <header>
                    <div>Opções</div>
                    <div>Votos</div>
                </header>
                $voteComponent
            </div>
        HTML;

        return $html;
    }


}