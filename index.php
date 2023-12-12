<?php
require_once('vendor/autoload.php');

$obj = new Kwork\KworkParser();

print_r($obj->parse());