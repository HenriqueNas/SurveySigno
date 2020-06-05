<?php
require_once '../view/ViewSurvey.php';
use View\ViewSurvey;

?>
<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css"  href="../assets/styles.css" />
        <link rel="icon" type="image/png" href="https://site.signoweb.com.br/assets/images/favicon/favicon-16x16.png" sizes="16x16">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"/>

        <title>SurveySigno</title>
    </head>

    <body>
        <header id="main-header" style="height: 92px;">
            <div class="content">
                <img src="../assets/logo-signo.svg" alt="Logo SignoWeb" />
                <div></div>
                <div class="side">
                  <span onclick="window.location = '../pages/Dashboard.php'">
                    <strong>Enquetes</strong>
                    <div class="undescore"></div>
                  </span>
                    <span>
                    Criar
                    <div class="undescore"></div>
                  </span>
                </div>
            </div>
        </header>

        <div class="survey-container">
            <?php echo ViewSurvey::surveysCard($_GET['survey']) ?>
        </div>
    </body>
</html>