<?php

session_start();

if (!$_SESSION["login"]) {
    header('Location: login.php');
    exit;
}

require('functions.php');
$id = $_GET["id"];
if (delete($id) > 0) {
    echo "<script>
                  alert('deleted success');
                  document.location.href='index.php';
              </script>";
} else {
    echo "<script>
                  alert('deleted failed!');
                  document.location.href='index.php';
              </script>";
}
