<?php

include_once ("conf.php");
include_once ("libs/ReadFile.php");


$result = new ReadFile();
$res = $result->replaceText(PATH);

echo $res;
//include_once ("template/index1.php");