<?php
    session_start();
    $name=$_SESSION['username'];
    echo "<p style='font-size: 30px; margin-left: 150px; margin-top: 50px;'>Bonjour,</p>
    <p style='font-size: 30px; margin-left: 200px; margin-top: 50px;'>$name</p>";
    session_destroy();
?>