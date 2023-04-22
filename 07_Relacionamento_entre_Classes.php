<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 07 - PHP POO</title>
</head>

<body>

<pre>
<h1>Aula 07 - PHP POO</h1>
<h2>Relacionamento entre Classes e Objetos Compostos em PHP</h2>
<strong>Diagrama de Classes</strong>

1) Definindo a Classe Lutador: Atributos, Métodos e Visibilidade;
===============
<strong> << Lutador >> </strong>
===============
- nome
- nacionalidade
- idade
- altura
- peso
- categoria
- vitorias 
- derrotas 
- empates
===============
+ apresentar()
+ status()
+ ganharLuta()
+ perderLuta()
+ empatarLuta()
===============

2) Definindo a Classe Luta: Atributos, Métodos e Visibilidade;
===============
<strong> << Luta >> </strong>
===============
- desafiado
- desafiante
- rounds
- aprovada
===============
+ marcarLuta()
+ lutar()
===============

<hr>

<h2>Algoritmo:</h2>

classe Lutador
    // Atributos
    privado nome : Caractere
    privado nacionmalidade : Caractere
    privado idade : inteiro
    privado altura : real
    privado peso : real 
    privado vitorias : inteiro
    privado derrotas : inteiro
    privado empates : inteiro

    // Métodos:
    public apresentar()
    public status()
    public ganharLuta()
    public perderLuta()
    public empatarLuta()

fimClasse
<hr>
    <h2>Programa Principal</h2>
    L: vetor[0..5]
    L[0] = novo Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1)
    L[1] = novo Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3)
    L[2] = novo Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1)
    L[3] = novo Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2)
    L[4] = novo Lutador("UFO Cobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3)
    L[5] = novo Lutador("Nerdaart", "USA", 30, 1.81, 105.7, 12, 2, 4)

    L[0].apresentar()
    L[2].status()
    L[3].getCategoria()
    L[1].ganharLuta()
<hr>

    <h1>Projeto Lutas de MMA</h1>
    <?php 
    // Carregando a Classe Lutador:
    require_once "07_Lutador.php";

    // Criando um Vetor:
    $l = array();

    // Instanciando a Classe Lutador, criando os Lutadores e passando os Parâmetros:
    $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("Snapshadow", "USA", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $l[4] = new Lutador("UFO Cobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[5] = new Lutador("Nerdaart", "USA", 30, 1.81, 105.7, 12, 2, 4);



    // Chamando o Método categoria
    // $l[3]->setCategoria(); # Visibilidade é Private, mensagem de erro
    # Fatal error:  Uncaught Error: Call to private method Lutador::setCategoria() from global scope

    // Chamando o Método status
    $l[3]->status();
    
    // Chamando o Método apresentar
    $l[3]->apresentar();
    
    // Chamando o Método perderLuta
    $l[3]->perderLuta();

    // Chamando o Método status
    $l[3]->status();






    ?>

</pre>
</body>
</html>