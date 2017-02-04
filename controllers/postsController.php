<?php

/**
* 
*/
class postsController extends controller
{
	
	public function index(){
		echo 'esse é um teste';
	}

	public function ver($nomeDoUsuario){
		echo 'foi mesmo ' . $nomeDoUsuario;
	}

}