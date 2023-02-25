<?php

  require_once('./config.php');
  session_destroy(); // session end
  header('location:index.php');
