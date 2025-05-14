<?php
include_once "../core/SessionClass.php";

ClsSession::remove_all();
header("Location: ../index.php");
exit;
