<?php
require_once 'vendor/autoload.php';
require_once 'bootstrap.php';
require_once 'src/entities/ClientMoral.php';
require_once 'src/model/ClientMoralDB.php';
require_once 'src/controller/ClientMoralController.php';





$clientmoralcontroller = new ClientMoralController();
$clientmoralcontroller->addClientMoralController();


?>