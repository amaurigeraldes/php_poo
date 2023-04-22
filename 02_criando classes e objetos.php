<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 02 - POO em PHP</title>
</head>

<body>

    <h1>Aula 02 - POO em PHP</h1>
    <h2>Criando Classes e Objetos</h2>
    <p>
    <strong>OBJETOS:</strong><br>
    Características => Atributos;<br>
    Comportamentos => Métodos;<br>
    Estado => Status;<br>
    </p>

    <pre>
    <?php 
    // Carregando a Classe Caneta:
    require_once '02_Caneta.php';

    echo "<br>";
    echo "<strong>1) Instanciando a Classe Caneta c1:</strong> <br>";
    $c1 = new Caneta;

    // Definindo os Atributos:
    $c1->cor = "Azul";
    $c1->ponta = 0.5;
    $c1->tampada = true; # true = 1 e false = vazio

    

    echo "<strong>Mostrando o Estado atual da variável:</strong> var_dump(var) ou print_r(var)<br>";
    echo "<br>";
    echo "<strong>Usando var_dump(var):</strong> <br>";
    var_dump($c1);
    echo "<br>";
    echo "<strong>Usando print_r(var):</strong> <br>";
    print_r($c1);
    echo "<hr>";
    
    echo "<strong>Chamando o Método rabiscar():</strong> <br>";
    $c1->rabiscar();
    echo "<br>";
    print_r($c1);
    echo "<hr>";

    echo "<strong>Chamando o Método destampar() e o Método rabiscar():</strong> <br>";
    $c1->destampar();
    $c1->rabiscar();
    echo "<br>";
    print_r($c1);
    echo "<hr>";


    echo "<strong>2) Instanciando uma outra Classe Caneta c2:</strong> <br>";
    $c2 = new Caneta;

    // Definindo os Atributos:
    $c2->cor = "Verde";
    $c2->carga = 50;
    $c2->tampar();
    echo "<br>";
    print_r($c2);
    echo "<hr>";



    ?>
    </pre>
    
</body>
</html>