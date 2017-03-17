<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();

        //instanciando model usuarios
        $u = new usuarios();
        //se usuario não tiver logado
        // if (!$u->isLogged()) {
        // 	header("Location: /twitter");
        // }


    }

    public function index() {
        $dados = array();


        $this->loadTemplate('home', $dados);
    }

    public function teste() {
        $dados = array();


        echo "teste";
    }

}