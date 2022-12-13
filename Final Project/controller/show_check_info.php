<?php
require_once('../model/Student_model.php');
function fetchUser($id)
{
    return showUser($id);

}
$oneuser = fetchUser();
if ($user['id']) {
    $data = showUser($_POST['id']);

    $id = $data["id"];
    $name = $data["fristname"];

}
?>