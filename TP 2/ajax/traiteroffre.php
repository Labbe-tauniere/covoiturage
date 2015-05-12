
<?php
    session_start();
require_once '../util/fonctions.php';
    $id = $_GET['id'];
    $offres = $_SESSION['offres'];
    for ($cnt = 0; $cnt < count($offres); ++$cnt)
    {
        if ($offres[$cnt]['id'] == $id)
        {
            echo json_encode($offres[$cnt]);
            break;
        }
    }
?>
