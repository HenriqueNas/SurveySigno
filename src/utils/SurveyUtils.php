<?php

namespace Util;


class SurveyUtils {

    /**
     * Convert any string date format
     * to dd/MM/yyyy date format
     *
     * @param $date
     * @return false|string
     */
    public static function parseDate($date) {
        return date("d/m/Y", strtotime($date));
    }

    /**
     * Compare begin and end date
     * to set the survey status
     *
     * @param $begin
     * @param $end
     * @return array
     */
    public static function dateCompare($begin, $end) {
        $today = date('Y-m-d');

        if ($begin > $today) {
            return ['status' => 'Não Iniciada', 'class' => 'waiting'];
        } elseif ($end < $today) {
            return ['status' => 'Finalizada', 'class' => 'finished'];
        } else {
            return ['status' => 'Em Andamento', 'class' => 'active'];
        }
    }

}