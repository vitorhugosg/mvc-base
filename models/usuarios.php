<?php
class usuarios{
        

        public function isLogged(){
        	//verificar se existe uma SESSAO

        	if (isset($_SESSION['twlg'])) {
        		return true;
        	}else{
        		return false;
        	}


        }
}