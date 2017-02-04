<?php

    class Fotos extends Model
    {
        public function __construct()
        {
            parent::__construct();
        }

        public function getFotos()
        {
            $array = array();

            $sql = "select * from fotos";
            $sql = $this->db->query($sql);

            if($sql->rowCount() > 0){
                $array = $sql->fetchAll();
            }

            return $array;
        }
    }

?>
