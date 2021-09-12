<?php
header('Access-Control-Allow-Origin: *');
session_start();
switch ($_GET['type']) {
    case 'name':
        echo $_SESSION['name'];
        break;
    case 'power';
        echo $_SESSION['power'];
        break;
    case 'id':
        echo $_SESSION['id'];
        break;
}
