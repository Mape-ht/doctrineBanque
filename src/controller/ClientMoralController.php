<?php


// require_once "./libs/system/Controller.php";

use src\model\ClientPhysiqueDB;
use src\model\ClientMoralDB;
use libs\system\Controller;
use libs\system\Model;
use libs\system\View;

class ClientMoralController extends Controller
{

    public function index()
    {
        return $this->view->load("client/add");
    }

    public function addClient()
    {


        // var_dump($_POST);
        // die;
        if (isset($_POST['ajouter'])) {


            extract($_POST);
            if ($_POST['cltp'] == "1") {

                if (isset($_POST) && empty($_POST) == false) {

                    $clientMoral = new ClientMoral(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)

                    $clientMoral->setRaisonso($_POST["raisonSo"]); //récupérer les $_post du view
                    $clientMoral->setAdresse($_POST["adresseEmploi"]);
                    $clientMoral->setNinea($_POST["numIdEmployeur"]);
                    $clientMoral->setTelephone($_POST["telephoneMo"]);
                    $clientMoral->setGerant($_POST["nomsEmployeur"]);
                    $clientMoral->setTypeclt($_POST["cltp"]);

                    $clientmoraldb = new ClientMoralDB();
                    $ok = $clientmoraldb->addClientMoral($clientMoral);

                    if ($ok != null) {

                        echo "client moral inséré!";
                        // return $this->view->load("client/client");


                    } else {

                        echo "erreur!!!";
                    }
                }
            }

            if ($cltp == "2") {
                // var_dump($_POST);
                // die;
                if (isset($_POST) && empty($_POST) == false) {

                    $clientPhyRep = new ClientPhysiqueDB();
                    $clientP = new ClientPhysique(); //instancier l'objet clientM (qui est un nouvel objet) de Type ClientMoral (qui est une classe)
                    $clientmoraldb = new ClientMoralDB();

                    //$clientP->setTypeclt($_POST["cltp"]);
                    $clientP->setNom($_POST["nomsClt"]); //récupérer les $_post du view
                    $clientP->setPrenom($_POST["prenoms"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
                    $clientP->setAdresse($_POST["adresse"]);
                    $clientP->setTelephone($_POST["phone"]); //récupérer les $_post du view
                    $clientP->setEmail($_POST["email"]);
                    $clientP->setStatut($_POST["statut"]); //attention le SetNom est le nom dans sql et $_post[] est le name dans le formulaire
                    $clientP->setSalaire($_POST["salaire"]);
                    $clientP->setClientMoral($clientmoraldb->getClientMoral($_POST["employeur"]));
                    $clientP->setcin($_POST["numIdTravail"]);
                    $clientP->setTypeclt($_POST["cltp"]);

                    $ok = $clientPhyRep->addClientPhysique($clientP);

                    if ($ok) {

                        echo "client physique inséré!";
                    } else {
                        echo "Erreur !..."; //sinon message erreur

                    }
                }
            } else {
                return $this->view->load("client/add");
            }
        }
    }
    // $clientMoral->setAdresse("Mamelles");
    // $clientMoral->setGerant("Moustapha");
    // $clientMoral->setRaisonso("NVT");
    // $clientMoral->setTelephone("338695252");
    // $clientMoral->setNinea("N1258769");

}
