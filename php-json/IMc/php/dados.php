<?php
class Calculcadorimc
{
    private $altura;
    private $peso;
    private $resultado;
    private $genero;

    public function __get($atributo){
        return $this->$atributo;
    }
    public function __set($atributo, $resultado){
        $this->$atributo = $resultado;
    }

    public function CalculoIMC()
    {
        switch( $this -> genero)
        {
            case 1:
                if($this -> resultado <20.7 )
                {
                    echo ('<p> você está abaixo do peso</p');
                    echo ('<div>
                    <img src="https://thumbs.dreamstime.com/b/homem-magro-dos-desenhos-animados-76766444.jpg" alt="imagem magro">
                    </div>');
                    return $resultado = $peso / ($altura*$altura);
                }
                elseif()
                {

                }
        }
    }



}

?>