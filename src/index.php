<?php
//session_start();
//include_once("Connection.php");
//?>
<!---->
<?php
//    $oConn = Connection::getConn();
//
//    //busca as mensagens da licitação solicitada
//    $sSql =   "SELECT * FROM tbsurveys limit 1";
//
//    $result = $oConn->prepare($sSql);
//    $result->execute();
//    $row = $result->fetch(PDO::FETCH_OBJ);
//?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/styles.css" />

    <title>Survey Signo</title>
</head>

<body>
<header id="main-header">
    <div class="content">
        <img src="./assets/logo-signo.svg" alt="Logo SignoWeb" />
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
<!--        <tr>-->
<!--            <td class="title">-->
<!--                --><?php //echo $row->title ?>
<!--            </td>-->
<!--            <td class="active">-->
<!--                --><?php //echo $row->title ?>
<!--            </td>-->
<!--            <td>-->
<!--                --><?php //echo $row->begindate ?>
<!--            </td>-->
<!--            <td>-->
<!--                --><?php //echo $row->enddate ?>
<!--            </td>-->
<!--        </tr>-->
        <tr>
            <td class="title">Desenvolvimento</td>
            <td class="waiting">Não Iniciada</td>
            <td>13/04/2020</td>
            <td>16/04/2020</td>
        </tr>
        <tr>
            <td class="title">Desenvolvimento</td>
            <td class="finished">Finalizada</td>
            <td>13/04/2020</td>
            <td>16/04/2020</td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
