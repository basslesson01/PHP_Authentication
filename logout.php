<?php //THIS IS ACTUALLY THE LOGIN CHECK
session_start();
session_destroy();

header("Location: login.php");