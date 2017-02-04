<?php

/**
* 
*/
class homeController extends controller
{
	// public function __construct(){
	// 	parent::__construct();
	// }
	
	public function index()
    {
		$fotos = new Fotos();
        $dados['fotos'] = $fotos->getFotos();

		$this->loadTemplate('home', $dados);
	}

	public function sobre()
    {
		$dados = array();
		$this->loadView('sobre', $dados);
	}

}
