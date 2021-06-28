<?php
class Endereco{
    private $logradouro;
    private $numero;
    private $cidade;
    
    public function __construct($a, $b, $c){
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;
    }
    public function __destruct(){
        var_dump("Destruir");
    }
    public function __toString() {
        return $this->logradouro.", ".$this->numero." - ".$this->cidade." <br>";
    }
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão", "123", "Santos");

/*print_r($meuEndereco);
unset($meuEndereco);*/

echo $meuEndereco;