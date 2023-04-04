<?php
include("../res/x5engine.php");
$nameList = array("2x4","yd7","fmd","lyx","a8f","e64","7tw","mm2","gpt","tdh");
$charList = array("P","V","6","X","5","S","U","3","Z","8");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
