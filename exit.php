<?php

require 'baglan.php';
session_start();
session_destroy();
session_unset();

header('Refresh:0; login.php');

?>