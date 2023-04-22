<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 03 - PHP POO</title>
</head>

<body>
    <h1>Aula 03 - POO em PHP</h1>
    <h2>Configurando Visibilidade de Atributos e Métodos</h2>
    
    <p>
    <strong>Diagrama de Classes </strong><br>
    UML (Linguagem de Modelagem Unificada)<br>
    <br>
    Mudando a Visibilidade: <br>
    +       Público; <br>
    -       Privado; <br>
    #       Protegido; <br>

    <br>
    <strong>Classe:</strong> usar letra Maiúscula <br>
    Caneta <br>
    <br>
    
    <strong>Atributos:</strong> usar letras Minúsculas <br>
    + modelo <br>
    + cor <br>
    - ponta <br>
    # carga <br>
    # tampada <br>
    <br>

    <strong>Métodos:</strong> usar Parenteses <br>
    + escrever() <br>
    + rabiscar() <br>
    + pintar() <br>
    - tampar() <br>
    - destampar() <br>
    </p>

    <hr>

    <pre>
        <?php 
            // Carregando a Classe Caneta:
            require_once '03_Caneta.php';

            echo "<br>";
            echo "<strong>1) Instanciando a Classe Caneta c1:</strong> <br>";
            $c1 = new Caneta;

            // Definindo os Atributos:
            $c1->modelo = "BIC Cristal"; # Public
            $c1->cor = "Verde";          # Public
            // $c1->ponta = 0.5;            # Private (Fatal error:  Uncaught Error: Cannot access private property Caneta::$ponta)
            // $c1->carga = 99;             # Protect (Uncaught Error: Cannot access protected property Caneta::$carga)
            // $c1->tampada = true;         # Protect (Uncaught Error: Cannot access protected property Caneta::$tampada)

            echo "<strong>Mostrando o Estado atual da variável:</strong> var_dump(var) ou print_r(var)<br>";
            echo "<br>";
            echo "<strong>Usando print_r(var):</strong> <br>";
            print_r($c1);
            echo "<hr>";


            echo "<strong>Chamando o Método rabiscar():</strong> <br>";
            $c1->rabiscar();
            echo "<br>";
            print_r($c1);
            echo "<hr>";


            echo "<strong>Chamando o Método tampar() e o Método rabiscar():</strong> <br>";
            // $c1->tampar(); # Private (Uncaught Error: Call to private method Caneta::tampar())
            // Alterando a Visibilidade para Public
            $c1->tampar();
            $c1->rabiscar();
            echo "<br>";
            print_r($c1);
            echo "<hr>";


            echo "<strong>Chamando o Método destampar() e o Método rabiscar():</strong> <br>";
            // $c1->destampar(); # Private (Uncaught Error: Call to private method Caneta::destampar())
            // Alterando a Visibilidade para Public
            $c1->destampar();
            $c1->rabiscar();
            echo "<br>";
            print_r($c1);
            echo "<hr>";
            echo "<strong>Observação Importante:</strong><br>Os Métodos tampar() e destampar() estão dando acesso ao Atributo 'tampada' que é <br>protegido (Protect), e isso sim é possível. <br>";
            echo "<hr>";
        
        ?>
    </pre>
    
</body>
</html>