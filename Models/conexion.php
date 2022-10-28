<?php
    class Conexion extends PDO{
        private $hostBD='localhost';
        private $nombreBD='portafolio5j';
        private $usuarioBD='root';
        private $passwordBD='';
        public function __construct(){
            try {
                parent::__construct('mysql:host='.$this->hostBD.';bdname='
            .$this->nombreBD.';charset=utf8',$this->usuarioBD,$this->passwordBD,
            array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION));
            } catch (Exception $e) {
                exit;
            }
        }
    }
?>