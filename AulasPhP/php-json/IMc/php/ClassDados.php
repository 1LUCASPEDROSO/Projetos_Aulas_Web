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
                if($this -> resultado < 20.7)
                {
                    echo ('<p> você está abaixo do peso</p');
                    echo ('<div>
                    <img src="https://thumbs.dreamstime.com/b/homem-magro-dos-desenhos-animados-76766444.jpg" alt="imagem magro">
                    </div>');
                    return $this -> resultado = $this -> peso / ( $this -> altura* $this -> altura);
                }
                elseif($this -> resultado > 20.7 && $this -> resultado < 26.4)
                {
                    echo ('<p> você está no peso ideal</p');
                    echo ('<div>
                    <img src="https://img.freepik.com/fotos-premium/quase-no-meu-peso-ideal-foto-de-um-homem-medindo-sua-cintura-usando-uma-fita-metrica-contra-um-fundo-de-estudio_590464-64339.jpg?w=2000" alt="imagem ideal">
                    </div>');
                }
                elseif($this -> resultado >= 26.5 && $this -> resultado <= 27.8)
                {
                    echo ('<p> você está no pouco acima do peso</p');
                    echo ('<div>
                    <img src="https://www.homemnoespelho.com.br/wp-content/uploads/2015/03/Homem-No-Espelho-Moda-para-homens-gordos-acima-do-peso-1.jpg" alt="imagem ideal">
                    </div>');
                }
                elseif($this -> resultado >= 27.9 && $this -> resultado <= 31.1)
                {
                    echo ('<p> você está no pouco acima do peso</p');
                    echo ('<div>
                    <img src="https://static4.depositphotos.com/1014511/364/i/600/depositphotos_3640744-stock-photo-stomach.jpg" alt="imagem ideal">
                    </div>');
                }
                else
                {
                    header("Location: ./GUI/erro.php");
                }
        }
    }
}
?>