<?php
    session_start();
    session_unset();
    session_destroy();
    header("Location:http://localhost/blogging%20site/index.php");

?>