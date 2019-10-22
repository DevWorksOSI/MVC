<?php
error_reporting(E_ALL); // Error engine - always ON!

ini_set('display_errors', TRUE); // Error display - OFF in production env or real server

ini_set('log_errors', TRUE); // Error logging

ini_set('error_log', '/home/u964034289/public_html/test/mvc/logs/errors.log'); // Logging file

ini_set('log_errors_max_len', 1024); // Logging file size
require APPROOT . '/views/inc/header.php';
 echo '<h2>About</h2>';
require APPROOT . '/views/inc/footer.php';