<?php
    class GerenciadorBanco{
        private $numeroPolitico;
        private $nomeEleitor;
        private $numeroTitulo;
        public $numeroRegistro;
        
        public function __construct($numeroPolitico,$nomeEleitor,$numeroTitulo)
        {
            $this->setNumeroPolitico($numeroPolitico);
            $this->setNomeEleitor($nomeEleitor);
            $this->setNumeroTitulo($numeroTitulo);
            $this->numeroRegistro=md5(rand(1,100000000)).$this->getNumeroTitulo();                 
            $this->inserir($this->getNumeroPolitico(),$this->getNomeEleitor(),$this->getNumeroTitulo(),$this->numeroRegistro);
           
        }

        public function getNumeroPolitico()
        {
            return $this->numeroPolitico;
        }

        public function setNumeroPolitico($numeroPolitico)
        {
            $this->numeroPolitico=$numeroPolitico;
        }

        public function getNomeEleitor()
        {
            return $this->nomeEleitor;
        }

        public function setNomeEleitor($nomeEleitor)
        {
            $this->nomeEleitor=$nomeEleitor;
        }       

        public function  getNumeroTitulo()
        {
            return $this->numeroTitulo;
        }

        public  function setNumeroTitulo($numeroTitulo)
        {
            $this->numeroTitulo=$numeroTitulo;
        }

        public function inserir($numeroPolitico,$nomeEleitor,$numeroTitulo,$numeroRegistro)
        {        
            $con=mysqli_connect("localhost","root","");
            mysqli_select_db($con,"db_eleicao");
            $slq="INSERT INTO `db_eleicao`.`tb_votacao` (`numeroPolitico`, `nomeEleitor`, `numeroTitulo`, `numeroRegistro`) VALUES ('$numeroPolitico', '$nomeEleitor', '$numeroTitulo', '$numeroRegistro');";
            mysqli_query($con,$slq);
        }

    }