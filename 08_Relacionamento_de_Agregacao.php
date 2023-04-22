<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 08 - PHP POO</title>
</head>

<body>

<pre>
<h1>Aula 08 - PHP POO</h1>
<h2>Relacionamento de Agregação entre Objetos em PHP</h2>
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
    publico apresentar()
    publico status()
    publico ganharLuta()
    publico perderLuta()
    publico empatarLuta()

    // Métodos Especiais:
    


fimClasse

classe Luta
    // Atributos
    privado desafiado : Lutador # Utilizando um Tipo Abstrato que é uma Instância da Classe Lutador
    privado desafiante : Lutador # Utilizando um Tipo Abstrato que é uma outra Instância da Classe Lutador
    privado rounds : inteiro
    privado aprovada : logico

    // Métodos:
    publico metodo marcarLuta(l1, l2: Lutador)
        Se (l1.getCategoria() = l2.getCategoria()) e (l1 <> l2) então
            aprovada = verdadeiro
            desafiado = l1
            desafiante = l2
        Senão
            aprovada = falso
            desafiado = nulo
            desafiante = nulo
        fimSe
    fimMetodo

    publico metodo lutar()
        Se (aprovada)
            desafiado.apresentar()
            desafiante.apresentar()
            vendedor = aleatório(0..2)
            escolha (vencedor)
                caso 0: //Empate
                    Escreva("Empatou!")
                    desafiado.empatarLuta()
                    desafiante.empatarLuta()
                    break
                caso 1: //Ganhou o Desafiado
                    Escreva(desafiado.getNome())
                    desafiado.ganharLuta()
                    desafiante.perderLuta()
                    break
                caso 2: //Ganhou o Desafiante
                    Escreva(desafiante.getNome())
                    desafiante.ganharLuta()
                    desafiado.perderLuta()
                    break
        Senão
            Escreva("Luta não poderá acontecer")
        fimSe 
    fimMetodo

    // Métodos Especiais:
    publico metodo setDesafiado(dd: Lutador)
        desafiado = dd
    fimMetodo
    publico metodo getDesafiado()
        retorne desafiado
    fimMetodo

    publico metodo setDesafiante(dd: Lutador)
        desafiante = dt
    fimMetodo
    publico metodo getDesafiante()
        retorne desafiante
    fimMetodo
fimClasse


REGRAS DA Luta
1) Só poderão ser marcadas lutas entre lutadores da mesma categoria;
2) Desafiado e Desafiante deverão ser lutadores diferentes;
3) A luta poderá acontecer somente se estiver Aprovada;
4) O resultado somente poerá ser a vitória de um dos lutadores ou o empate;


<hr>
    <h2>Programa Principal</h2>
    
    CRIANDO OS LUTADORES:
    L: vetor[0..5]
    L[0] = novo Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1)
    L[1] = novo Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3)
    L[2] = novo Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1)
    L[3] = novo Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2)
    L[4] = novo Lutador("UFO Cobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3)
    L[5] = novo Lutador("Nerdaart", "USA", 30, 1.81, 105.7, 12, 2, 4)

    CHAMANDO OS MÉTODOS:
    L[0].apresentar()
    L[2].status()
    L[3].getCategoria()
    L[1].ganharLuta()

    CRIANDO AS LUTAS:
    MMA01 = novo Luta()
    MMA01.marcarLuta(L[0], L[1])
    MMA01.lutar()


<hr>

    <h1>Projeto Lutas de MMA</h1>
    <?php 
    // Carregando as Classes Lutador e Luta:
    require_once "08_Lutador.php";
    require_once "08_Luta.php";

    // Criando um Vetor:
    $l = array();

    // Instanciando a Classe Lutador, criando os Lutadores e passando os Parâmetros:
    $l[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 2, 1);
    $l[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);
    $l[2] = new Lutador("Snapshadow", "USA", 35, 1.65, 80.9, 12, 2, 1);
    $l[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);
    $l[4] = new Lutador("UFO Cobol", "Brasil", 37, 1.70, 119.3, 5, 4, 3);
    $l[5] = new Lutador("Nerdaart", "USA", 30, 1.81, 105.7, 12, 2, 4);

    // Instanciando a Classe Luta:
    $MMA01 = new Luta();

    // Marcando uma Luta e definindo os Lutadores:
    $MMA01->marcarLuta($l[4], $l[5]);

    // Começar a Luta:
    $MMA01->lutar();

    // Novo Status dos Lutadores:
    $l[4]->status();
    $l[5]->status();





    ?>

</pre>
</body>
</html>