<?php

namespace View;
use Controller\ControllerSurvey;

require '../controller/ControllerSurvey.php';

$controllerSurvey = new ControllerSurvey();
$surveys[] = $controllerSurvey->getAllSurveys();

class ViewSurvey
{


    public function surveysInfo()
    {
        $html = <<<HTML
            <tr>
                <td class="title">Desenvolvimento</td>
                <td class="waiting">Não Iniciada</td>
                <td>13/04/2020</td>
                <td>16/04/2020</td>
            </tr>
        HTML;

        return $html;
    }
}