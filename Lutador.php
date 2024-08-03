<?php

class Lutador
{
    private $nome;
    private $nascionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;

    /**
     * @param $nome
     * @param $nascionalidade
     * @param $idade
     * @param $altura
     * @param $peso
     * @param $vitorias
     * @param $derrotas
     * @param $empates
     */
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em)
    {
        $this->nome = $no;
        $this->nascionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    function apresentar()
    {
        echo "<p>------------------------------------------</p>";
        echo "<p> Chegou a hora! O lutador: ".$this->getNome();
        echo " veio diretamente de ".$this->getnascionalidade();
        echo  "tem ".$this->getIdade()." anos e pesa ".$this->getPeso()."Kg";
        echo "<br>Ele tem ".$this->getVitorias()." vitorias ";
        echo $this->getDerrotas()." derrotas e ".$this->getEmpates()." empates.";


    }
    function status()
    {
        echo "<p>------------------------------------------</p>";
        echo "<p>".$this->getNome()." é um peso ".$this->getCategoria();
        echo " e já ganhou ".$this->getvitorias()." vezes,";
        echo " Perdeu ".$this->getDerrotas()." vezes e ";
        echo " empatou ".$this->getEmpates()." vezes";

    }
    function ganharLuta()
    {
        $this->setVitorias($this->getVitorias() + 1);


    }
    function perderLuta()
    {
        $this->setDerrotas($this->getDerrotas() + 1);

    }
    function empatarLuta()
    {
        $this->setEmpates($this->getEmpates() + 1);

    }


    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($no)
    {
        $this->nome = $no;
    }

    /**
     * @return mixed
     */
    public function getNascionalidade()
    {
        return $this->nascionalidade;
    }

    /**
     * @param mixed $nascionalidade
     */
    public function setNascionalidade($nascionalidade)
    {
        $this->nascionalidade = $nascionalidade;
    }

    /**
     * @return mixed
     */
    public function getIdade()
    {
        return $this->idade;
    }

    /**
     * @param mixed $idade
     */
    public function setIdade($idade)
    {
        $this->idade = $idade;
    }

    /**
     * @return mixed
     */
    public function getAltura()
    {
        return $this->altura;
    }

    /**
     * @param mixed $altura
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    /**
     * @return mixed
     */
    public function getPeso()
    {
        return $this->peso;

    }

    /**
     * @param mixed $peso
     */
    public function setPeso($peso)
    {
        $this->peso = $peso;
        $this->setCategoria();
    }

    /**
     * @return mixed
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param mixed $categoria
     */
    private function setCategoria()
    {
        if ($this->peso < 52.2){
            $this->categoria ="Invalido";
        }elseif ($this->peso <= 70.3) {
            $this->categoria = "Leve";
        }elseif ($this->peso <= 83.9) {
            $this->categoria = "Médio";

        }elseif ($this->getPeso() <= 120.2){
            $this->categoria = "Pesado";
        }else {
            $this->categoria = "Invalido";
        }

    }

    /**
     * @return mixed
     */
    public function getVitorias()
    {
        return $this->vitorias;
    }

    /**
     * @param mixed $vitorias
     */
    public function setVitorias($vitorias)
    {
        $this->vitorias = $vitorias;
    }

    /**
     * @return mixed
     */
    public function getDerrotas()
    {
        return $this->derrotas;
    }

    /**
     * @param mixed $derrotas
     */
    public function setDerrotas($derrotas)
    {
        $this->derrotas = $derrotas;
    }

    /**
     * @return mixed
     */
    public function getEmpates()
    {
        return $this->empates;
    }

    /**
     * @param mixed $empates
     */
    public function setEmpates($empates)
    {
        $this->empates = $empates;
    }


}

