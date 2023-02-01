=
<?php
session_start();

if (isset($_SESSION['azerty'])){

    $_SESSION['azerty'] = array();

    session_destroy();

    header("Location: ../index.php");
}

?>