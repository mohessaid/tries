<?php
require_once "userinfo.php";
$gotIt = $_POST["P"];
$ret;


if (!empty($gotIt)){
    switch($gotIt){
        case "moh":
            $ret = $user1;
            break;
        case "fati":
            $ret = $user2;
            break;
        default:
            break;
    }
}
else {
    $ret = "empty value";
}

$res = json_encode($ret, JSON_HEX_APOS);


header('Content-Type: application/json; charset=UTF-8');
echo $res;

?>