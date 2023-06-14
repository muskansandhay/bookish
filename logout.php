<?php
require_once("template/header.php");
session_destroy();
header("Location: index.php");
exit();