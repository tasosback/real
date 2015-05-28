<?php
session_start();
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

require_once('vendor/autoload.php');
require_once('Activity.php');
require_once('config.php');

if(!isset($_SESSION["chatId"])){
    $_SESSION["chatId"] = '523161';
}

$action = $_POST['action'];
$userId = $_POST['userId'];

switch ($action) {

    case 'getChannel':

        $response = new stdClass();
        $response->channelId = $_SESSION["chatId"]."_".$userId;
        echo json_encode($response);

        break;
}

?>
