<?php
session_start();

echo isset($_SESSION['username'])?$_SESSION['username']:'no existe la variable';