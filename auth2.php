<?php

session_start();

if(!isset($_SESSION['username'])){
    echo "<script>top.window.location = './login.php'</script>";
}

?>