<?php
namespace libs\system;
// require_once "../../bootstrap.php";

class Model{


    protected $entityManager;

    public function __construct()
    {

        require_once "bootstrap.php";
        $this->entityManager = $entityManager;

    } 

}

?>