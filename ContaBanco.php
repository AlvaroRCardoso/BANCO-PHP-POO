<?php
    class ContaBanco{
        private $numConta;
        protected $tipo;//Conta corrente, conta poupança//
        private $dono;
        private $saldo;
        private $status;//Aberta ou fechada//

        //Metodo Construtor//
        public function ContaBanco(){
            $this-> setSaldo(0);
            $this-> setStatus(false);
        }

        public function abrirConta($tipo){

            $this-> setTipo($tipo);
            $this-> setStatus(true);

            if ($tipo == "CC") {
                $this-> setSaldo(50);
            }elseif ($tipo == "CP") {
                $this-> setSaldo(150); 
            }

        }

        public function fecharConta(){

            if ($this->getSaldo() > 0) {
                echo "VOCÊ TEM VALOR EM CONTA";
            }elseif ($this->getSaldo() < 0) {
                echo "VOCÊ ESTÁ ME DEVENDO!!";
            }else {
                $this-> status = false;
            }
            
        }

        public function depositar($valor){

            if ($this-> getStatus(true)) {
                $this-> setSaldo($this-> getSaldo() + $valor);
            }
                
        }

        public function sacar($valor){

            if ($this-> getStatus(true)) {
                $this-> setSaldo($this-> getSaldo() - $valor);
            }

        }

        public function pagarMensal(){

            if ($this-> getStatus(true) && $this-> getTipo("CP")) {
                $this-> setSaldo($this-> getSaldo() - 50);
            }elseif ($this-> getStatus(true) && $this-> getTipo("CC")) {
                $this-> setSaldo($this-> getSaldo() - 100);
            }

        }
        
        public function getNumConta()
        {
                return $this->numConta;
        }

        public function setNumConta($numConta){
                $this->numConta = $numConta;
                return $this;
        }

        public function getTipo()
        {
                return $this->tipo;
        }

        public function setTipo($tipo){
                $this->tipo = $tipo;
                return $this;
        }

        public function getDono(){
                return $this->dono;
        }

        public function setDono($dono){
                $this->dono = $dono;
                return $this;
        }

        public function getSaldo(){
                return $this->saldo;
        }

        public function setSaldo($saldo){
                $this->saldo = $saldo;
                return $this;
        }

        public function getStatus(){
                return $this->status;
        }

        public function setStatus($status){
                $this->status = $status;
                return $this;
        }
    }
?>