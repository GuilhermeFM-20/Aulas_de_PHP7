<?php
interface Veiculo{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
} 

class Civic implements Veiculo{
    
    public function acelerar($velocidade){
        echo "O veículo acelerou até ".$velocidade."km/h <br>";
    }
    public function frenar($velocidade){
        echo "O veículo frenou até ".$velocidade."km/h <br>";
    }
    public function trocarMarcha($marcha){
        echo "O veículo engatou ".$marcha."<br>";
        
    }
    
}

$carro = new Civic();
$carro->acelerar("90");
$carro->frenar("80");
$carro->trocarMarcha(1);