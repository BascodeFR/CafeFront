<?php

use Bascodefr\Cafe\API\CafeApi;

$api = new CafeApi();

if(isset($_POST['code'])) {
    $param = $_POST['code'];
    if($api->getStatus() !== "") {
        $api->setStatus($param);
    } else {
        $status = "Problème avec l'API";
    }


}
$status = $api->getStatus();

if ($status === "2") {
    $status = "Préchauffage de la machine";
} elseif ($status === "1") {
    $status = "Lancement du café";
} elseif($status ==="0") {
    $status = "Machine Stoppée";
} else {
    $status = "Problème avec l'API";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="shortcut icon" href="/assets/bascode.ico" type="image/x-icon">
    <title>BasCoffee</title>
</head>
<body>
<header class="header">
    <h1 class="header-title">BASCODE CAFÉ</h1>
    <div class="header-social">
        <a href="https://www.instagram.com/bascode78/?hl=fr" target="_blank" class="instagram"></a>
        <a href="https://discord.gg/5Ts8Wjtpsd" target="_blank" class="discord"></a>
    </div>
</header>
<main class="content">
    <div class="content-present">
        <h1 class="content-title">BASCODE</h1>*
        <a href="#button" class="btn btn-info">DÉCOUVRIR</a>
    </div>
    <div class="content-info">
        <h1 style="color: red"><?= $status ?></h1>
    </div>
    <div id="button" class="content-actions">
        <form method="post" action="">
            <button class="btn" type="submit" id="code" name="code" value="2">PREHEATING</button>
            <button class="btn btn-start" type="submit" id="code" name="code" value="1">START</button>
            <button class="btn btn-stop" type="submit" id="code" name="code" value="0">STOP</button>
        </form>
    </div>

</main>
<footer class="footer">
    <p class="footer-copyright">COPYRIGHT © 2022 BASCODE</p>
    <img src="assets/img/bascode.png" alt="bascode" />
    <p class="footer-title">BASCODE</p>

</footer>
</body>
</html>