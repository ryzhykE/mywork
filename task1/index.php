<?php
include('config.php');
include('lib/functions.php');


if (isset($_POST['submit'])) {
    $uploadfile = PATH . basename($_FILES['uploadfile']['name']);
    $ressaltUpl = upload($uploadfile);
}

$result = showDir(PATH);

if(isset($_GET['del'])){
    $dell = $_GET['del'];
   deleteFile($dell);
}

include('template/index.php');
