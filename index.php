<?php
require_once 'config/autoload.php';

use libs\system\BootStrap;
use src\controller\ClientMoralController;
use src\controller\ClientPhysiqueController;
use src\controller\CompteController;
use src\controller\TypeFraisController;



require_once 'vendor/autoload.php';
require_once 'bootstrap.php';
require_once "libs/system/BootStrap.php";
require_once "libs/system/Controller.php";
require_once "libs/system/View.php";
require_once "libs/system/Model.php";
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



$bootstrap = new BootStrap();

// $clientmoralcontrollerdao = new ClientMoralController;
// $clientmoralcontrollerdao->addClientMoralController();


// //$clientmoralcontroller = new ClientMoralController();
// //$clientmoralcontroller->addClientMoralController();

// $clientphysiquecontroller = new ClientPhysiqueController();
// $clientphysiquecontroller->addClientPhysiqueController();

// $comptecontroller = new CompteController();
// $comptecontroller->addCompteController();

// $typefrais = new TypeFraisController();
// $typefrais->addTypeFrais();



?>