<?php
session_start();
unset($_SESSION["username"]);
echo 'logout';
