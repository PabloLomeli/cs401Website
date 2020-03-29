<?php
  session_start();
  session_destroy();
  header("Location: http://localhost/CS401/index.php");
  exit;