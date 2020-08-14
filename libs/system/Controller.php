<?php
namespace libs\system;


use libs\system\View;

class Controller{

    protected $view;

    public function __construct()
    {
    
        $this->view = new View(); //instantiation de view pour qu'il puisse être utilisé par la fonction load (de libs view) auniveau de src controller
    } 

}

?>