<?php
    require_once "ClassAutoLoad.php";

$details["sendToEmail"] = "wainainasamuel906@gmail.com";
$details["sendToName"] = "BM";
$details["emailSubjectLine"] = "OOP Test mail";
$details["emailMessage"] = "Hi there this is another tests";

$OBJ_SendMail->SendeMail($details, $conf);

header("Location: ./");
exit();
