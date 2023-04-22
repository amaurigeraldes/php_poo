<?php 

// Criando a Classe Lutador:

class Lutador {
    // Atributos:
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;


        // Sobrescrevendo os Métodos Abstratos e Criando as Funções:
        public function apresentar() {
            echo "<p>----------------------------------------------------------------</p>";
            echo "<p>This is the main event of the evening</p>";
            echo "<p>It's TIME!!!</p>"; 
            echo "<p>Introducing first the fighter of the blue corner, He is {$this->getNome()}.</p>";
            echo "<p>Comes from {$this->getNacionalidade()}.</p>";
            echo "<p>He is {$this->getIdade()} years old, weighing {$this->getPeso()} Kg and his height is {$this->getAltura()} m.</p>";
            echo "<p>His MMA cartel has:</p>";
            echo "<p>{$this->getVitorias()} wins,</p>";
            echo "<p>{$this->getEmpates()} draws and</p>";
            echo "<p>{$this->getDerrotas()} defeats.</p>";
        }
    
        public function status() {
            echo "<p>----------------------------------------------------------------</p>";
            echo "{$this->getNome()}. ";
            echo "He is a {$this->getCategoria()}, ";
            echo "{$this->getVitorias()} wins, ";
            echo "{$this->getEmpates()} draws and ";
            echo "{$this->getDerrotas()} defeats. <br>";
        }
    
        public function ganharLuta() {
            $this->setVitorias($this->getVitorias() + 1);
        }
    
        public function perderLuta() {
            $this->setDerrotas($this->getDerrotas() + 1);
        }
    
        public function empatarLuta() {
            $this->setEmpates($this->getEmpates() + 1);
        }
    
    // Métodos Especiais: Getter, Setter e Construct
    public function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        // $this->peso = $pe; # Alterar para $this->setPeso($pe);
        $this->setPeso($pe);
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }

    public function getNome() {
        return $this->nome;
    }
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNacionalidade() {
        return $this->nacionalidade;
    }
    public function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    public function getIdade() {
        return $this->idade;
    }
    public function setIdade($idade) {
        $this->idade = $idade;
    }

    public function getAltura() {
        return $this->altura;
    }
    public function setAltura($altura) {
        $this->altura = $altura;
    }

    public function getPeso() {
        return $this->peso;
    }
    public function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria(); # Incluir o setCategoria($categoria) e Excluir o Parâmetro $categoria
    }

    public function getCategoria() {
        return $this->categoria;
    }
    // A Categoria somente será alterada de acordo com a Faixa em que o Peso do Lutador se encontrar
    private function setCategoria() {  # Excluir o Parâmetro $categoria e alterar setCategoria para Private
        // $this->categoria = $categoria; # Apagar o Parâmetro
        if ($this->peso < 52.2) {
            $this->categoria = "invalid weight";
        } elseif ($this->peso <= 70.3) {
            $this->categoria = "lightweight";
        } elseif ($this->peso <= 83.9) {
            $this->categoria = "lightweight";
        } elseif ($this->peso <= 120.2) {
            $this->categoria = "heavyweight";
        } else {
            $this->categoria = "invalid weight";
        }
    }

    public function getVitorias() {
        return $this->vitorias;
    }
    public function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    public function getDerrotas() {
        return $this->derrotas;
    }
    public function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    public function getEmpates() {
        return $this->empates;
    }
    public function setEmpates($empates) {
        $this->empates = $empates;
    }

}

?>