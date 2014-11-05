<?php
header("Content-type:text/html;charset=utf-8");
session_start();
//require_once 'upload.class.php';
require_once 'config.php';
require_once 'framework/tiagoxu.php';
TIAGOXU::run($config);