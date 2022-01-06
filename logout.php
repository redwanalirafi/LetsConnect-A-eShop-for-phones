<?php
session_start();

session_unset();
session_destroy();

echo "<script>top.window.location = 'index.php'</script>";

?>