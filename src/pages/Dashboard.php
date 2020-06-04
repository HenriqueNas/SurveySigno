<?php
require '../view/ViewSurvey.php';
use View\ViewSurvey;

$viewSurvey = new ViewSurvey();

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../assets/styles.css" />

    <title>SurveySigno</title>
</head>

<body>
<header id="main-header">
    <div class="content">
        <img src="../assets/logo-signo.svg" alt="Logo SignoWeb" />
        <div></div>
        <div class="side">
          <span>
            <strong>Enquetes</strong>
            <div class="undescore white"></div>
          </span>
            <span>
            Criar
            <div class="undescore"></div>
          </span>
        </div>
    </div>
</header>

<div class="card">
    <div>todos</div>
</div>

<div class="content surveys">
    <table>
        <thead>
        <tr>
            <th>Título</th>
            <th>Status</th>
            <th>Início</th>
            <th>Fim</th>
        </tr>
        </thead>
        <tbody>
            <?php echo $viewSurvey->surveysInfo() ?>
        </tbody>
    </table>
</div>
</body>
</html>

