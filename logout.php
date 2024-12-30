

<?php
session_start();
session_unset();
session_destroy();
header("Location: person-acc.php");
exit();
?>
