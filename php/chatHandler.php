<?php
header('Cache-Control: no-cache, must-revalidate');
header('Content-type: application/json');

require_once('vendor/autoload.php');
require_once('Activity.php');
require_once('config.php');

$action = $_POST['action'];

switch ($action) {

    case 'getChannel':

        $response = new stdClass();
        $response->sessionId = 'test';
        echo json_encode($response);

        break;
}

?>
