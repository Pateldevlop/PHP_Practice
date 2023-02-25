<?php
  $DB_SERVER = "localhost"; //servername
  $DB_USERNAME = "root"; //database username
  $DB_PASSWORD = ""; //database password
  $DB_NAME = "crud"; //database name ##create a database in database his name crud
  $conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME) or die(mysqli_close($conn));
  session_start(); // start the session
