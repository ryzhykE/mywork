<?php

include_once ("conf.php");
include_once ("libs/ReadFile.php");


$result = new ReadFile();
$res = $result->readFileString();

echo$res;