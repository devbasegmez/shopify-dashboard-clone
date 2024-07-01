<?php
$goto = isset($_GET['goto']) ? $_GET['goto'] : 'main';
switch($goto)
{
    case 'main':
        require("main.php");
        break;
    default:
        require("$goto.php");
        break;
}
?>