<?php
    class conexion{//[]
        private $servidor;
        private $usuario;
        private $contrasena;
        public $basedatos;
        public $conexion;
        public function __construct(){
            $this->servidor = "localhost";
            $this->usuario = "root";
            $this->contaseña = "";
            $this->basedatos = "bdtiendajuegos";
        }
        function conectar(){
            $this->conexion = new mysqli($this->servidor,$this->usuario,$this->contrasena,
            $this->basedatos);
            $this->conexion->set_charset("utf8");
        }
        function cerrar(){
            $this->conexion->close();
        }
    }
?>