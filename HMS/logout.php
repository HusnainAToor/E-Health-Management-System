<?php
session_start();
session_reset();
session_destroy();

echo '<script>window.location.href = "index.php";</script>';


?>