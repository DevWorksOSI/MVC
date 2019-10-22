<?php
error_reporting(E_ALL); // Error engine - always ON!

ini_set('display_errors', TRUE); // Error display - OFF in production env or real server

ini_set('log_errors', TRUE); // Error logging

ini_set('error_log', '/home/u964034289/public_html/test/mvc/logs/errors.log'); // Logging file


  require_once('../app/bootstrap.php');

  // Init Core Library
  $init = new Core;