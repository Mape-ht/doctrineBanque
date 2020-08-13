<?php
require_once 'vendor/autoload.php';
require_once 'bootstrap.php';
require_once 'src/entities/ClientMoral.php';
require_once 'src/entities/ClientPhysique.php';
require_once 'src/entities/Compte.php';
require_once 'src/entities/Typefrais.php';
require_once 'src/model/ClientMoralDB.php';
require_once 'src/model/ClientPhysiqueDB.php';
require_once 'src/model/CompteDB.php';
require_once 'src/model/TypeFraisDB.php';
require_once 'src/controller/ClientMoralController.php';
require_once 'src/controller/ClientPhysiqueController.php';
require_once 'src/controller/CompteController.php';
require_once 'src/controller/TypeFraisController.php';





//$clientmoralcontroller = new ClientMoralController();
// $clientmoralcontroller->addClientMoralController();

// $clientphysiquecontroller = new ClientPhysiqueController();
// $clientphysiquecontroller->addClientPhysiqueController();

$comptecontroller = new CompteController();
$comptecontroller->addCompteController();

// $typefrais = new TypeFraisController();
// $typefrais->addTypeFrais();



?>