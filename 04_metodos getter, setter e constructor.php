<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 04 - PHP POO</title>
</head>

<body>
    <pre>
    <h1>Aula 04 - POO em PHP</h1>
    <h1>Parte Teórica</h1>
    <h2>Métodos Especiais: Getter, Setter e Construct</h2>

    <strong>1º) Métodos Acessores (Getters):</strong>
    Dão acesso a um determinado Atributo, sem contudo dar acesso direto a esse Atributo.
    
    <strong>Acesso direto:</strong>
    e = nova Estante;
    t = e.TotDoc;

    <strong>Acesso não direto (garante maior segurança):</strong>
    e = nova Estante;
    t = e.getTotDoc();  => Método
    <hr>
    
    <strong>2º) Métodos Modificadores (Setters):</strong>
    Acessam um determinado Atributo, sem contudo ter acesso direto a esse Atributo.
    
    <strong>Acesso direto:</strong>
    e = nova Estante; 
    e.TotDoc = e.TotDoc + 1; 
    
    <strong>Acesso não direto (garante maior segurança):</strong>
    e = nova Estante; 
    t = e.setTotDoc(doc);  => Método 
        
    Exemplo:
    <strong>Classe:</strong> usar letra Maiúscula
    Caneta
    <strong>Atributos:</strong> usar letras Minúsculas
    + modelo
    - ponta

    + getModelo()
    + setModelo(m)
    + getPonta()
    + setPonta(p)

    <strong>Como fica:</strong>
    Classe Caneta
        publico modelo: Caractere
        privado ponta: Real

        publico Método getModelo()
            retorne modelo
        Fim Método

        publico Método setModelo
            (m: Caractere)
            modelo = m
        Fim Método

        publico Método getPonta()
            retorne modelo
        Fim Método

        publico Método setPonta
            (p: Real)
            modelo = p
        Fim Método
    FimClasse

Definindo os Valores para os Atributos: 
    c1 = nova Caneta
    c1.setModelo("BIC Cristal")
    c1.setPonta(0.5)

Fazendo a chamada dos Valores dos Atributos: 
    Escreva (c1.getModelo()) 
    Escreva (c1.getPonta()) 
<hr>

<strong>3º) Método Construtor (Construct):</strong>
    O Atributo já é criado de forma que não seja necessária a criação de um Método.

    <strong>Como funciona:</strong>
    Exemplo 01: 
    Classe Caneta 
        Metodo construtor() 
            tampar() 
            cor = "Azul" 
        FimMetodo 
    FimClasse 
    c1 = nova Caneta    => Será Azul e Tampada
    
    Exemplo 02:
    Classe Caneta
        Metodo construtor()
                (m: Caractere,
                 c: Caractere,
                 p: Real)
            setModelo(m)
            setCor(c)
            setPonta(p)
            tampar()
        FimMetodo
        c1 = nova Caneta
            ("BIC", "Azul", 0.5)    => Define os parâmetros iniciais dos Atributos
    FimClasse
    <hr>
    
    <strong>DIFERENÇAS ENTRE AS FORMAS DE ACESSO:</strong>
    <strong>Acesso direto:</strong>
    e = nova Estante; 
    t = e.TotDoc; 

    <strong>Acesso não direto (garante maior segurança):</strong>
    e = nova Estante; 
    t = e.getTotDoc();  => Método 
    <hr>
    
        <?php 
            echo "<h1>Parte Prática</h1>";
            // Carregando a Classe Caneta:
            require_once '04_Caneta.php';
            echo "<strong>Instanciando a Classe Caneta c1:</strong> <br>";
            $c1 = new Caneta;
            echo "<br>";
            echo "<strong>1) Definindo os Atributos utilizando o Método Setter:</strong> <br>";
            echo "c1->setModelo('BIC Cristal'); <br>";
            echo "c1->setPonta(0.5); <br>";
            echo "<strong>Modificam os Atributos mesmo que não sejam Public</strong> <br>";

            # Visibilidade do Atributo = Public
            $c1->setModelo("BIC Cristal"); # Modifica o Atributo mesmo que não seja Public;
            # Ou, de outra forma, se o Atributo for Público;
            // $c1->modelo = "BIC Cristal"; # Fatal error
            # Se não for Público, será gerado Fatal error:  Uncaught Error: Cannot access private property Caneta::$modelo

            # Visibilidade do Atributo = Private ou Protect
            $c1->setPonta(0.5);  # Modifica o Atributo mesmo que não seja Public;
            # Ou, de outra forma, se o Atributo for Público;
            // $c1->ponta = 0.5; # Fatal error
            # Se não for Público, será gerado Fatal error:  Uncaught Error: Cannot access private property Caneta::$ponta
            echo "<br>";
            echo "<strong>Mostrando o Estado atual da variável:</strong> print_r(var) <br>";
            print_r($c1);
            echo "<br>";
            echo "<br>";


            echo "<strong>2) Utilizando o Método Getter:</strong> <br>";
            // Devido aos (), colocar os Conjuntos entre {}:
            print "Eu tenho uma caneta {$c1->getModelo()} de ponta {$c1->getPonta()}. <br>";
            echo "<br>";
            echo "<br>";


            echo "<strong>3) Utilizando o Método Constructor - Exemplo 01: </strong>print_r(var) <br>";
            print_r($c1);
            echo "<br>";
            echo "<br>";


            echo "<strong>4) Utilizando o Método Constructor - Exemplo 02: </strong>print_r(var) <br>";
            // Carregando a Classe Caneta2:
            require_once "04_Caneta2.php";
            echo "<br>";
            echo "<strong>Instanciando a Classe Caneta2 c2:</strong> <br>";
            $c2 = new Caneta2("Compactor", "Verde", 0.5);
            print_r($c2);
            $c3 = new Caneta2("Compactor", "Vermelha", 0.4);
            print_r($c3);
            echo "<hr>";

             
        ?>
    </pre>
    
</body>
</html>