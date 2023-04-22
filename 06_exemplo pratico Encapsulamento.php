<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 06 - PHP POO</title>
</head>

<body>
    <pre>
    <h1>Aula 06 - PHP POO</h1>
    <h1>3 Pilares:Encapsulamento, Herança e Polimorfismo</h1>
<h2>1º Pilar Encapsulamento:</h2>
    1) Tornar mudanças invisíveis;
    2) Facilitar a reutilização do código;
    3) Reduzir efeitos colaterais.

Métodos Abstratos: não serão desenvolvidos na interface, apenas será dito que eles irão existir.

1.1) Criando a Interface (Controle Remoto) onde todos os Métodos serão Públicos;
================
<strong> << Interface >> </strong>
<strong>   Controlador   </strong>
================
+ ligar()
+ desligar()
+ abrirMenu()
+ fecharMenu()
+ maisVolume()
+ menosVolume()
+ ligarMudo()
+ desligarMudo()
+ play()
+ pause()
================

1.2) Definindo a Classe Controle Remoto: todos os Atributos serão Privados ou Protegidos

A Classe ControleRemoto vai implementar a Interface, ou seja, o Controle Remoto vai ser um Controlador;
Portanto, a Classe ControleRemoto vai ter como Métodos os Métodos Abstratos que foram definidos na Interface;
Serão incluídos os Métodos Especiais (Getter, Setter e Constructor).

<strong>ControleRemoto</strong> --------> <strong>Controlador</strong>

================
<strong>ControleRemoto</strong>
================
- volume
- ligado
- tocando
================
+ ligar()
+ desligar()
+ abrirMenu()
+ fecharMenu()
+ maisVolume()
+ menosVolume()
+ ligarMudo()
+ desligarMudo()
+ play()
+ pause()

Métodos Especiais (normalmente são Públicos, mas consideraremos Privados):
- setVolume()
- getVolume()
- setLigado()
- getLigado()
- setTocando()
- getTocando()
================
<hr>
<h2>Criando o Algoritmo:</h2>
<strong>1) Definindo os Métodos Abstratos:</strong>
interface Controlador
    publico abstrato Metodo ligar()
    publico abstrato Metodo desligar()
    publico abstrato Metodo abrirMenu()
    publico abstrato Metodo fecharMenu()
    publico abstrato Metodo maisVolume()
    publico abstrato Metodo menosVolume()
    publico abstrato Metodo ligarMudo()
    publico abstrato Metodo desligarMudo()
    publico abstrato Metodo ligarPlay()
    publico abstrato Metodo ligarPause()
fiminterface

<strong>2) Criando a Classe ControleRemoto:</strong>
<strong>classe ControleRemoto</strong>

    <strong>Atributos:</strong>
    privado inteiro volume
    privado logico ligado
    privado logico tocando

    <strong>Metodos Especiais:</strong>
    publico Metodo Construtor()
        volume = 50
        ligado = falso
        tocando = falso
    fimMetodo

    privado Metodo getVolume()
        retorne volume
    fimMetodo
    privado Metodo setVolume(v: inteiro)
        volume = v
    fimMetodo

    privado Metodo getLigado()
        retorne ligado
    fimMetodo
    privado Metodo setLigado(l: logico)
        ligado = l
    fimMetodo

    privado Metodo getTocando()
        retorne tocando
    fimMetodo
    privado Metodo setTocando(t: logico)
        tocando = t
    fimMetodo

<strong>3) Fazendo a Ligação entre a Classe ControleRemoto e a interface Controlador:</strong>

<strong>classe ControleRemoto implementa Controlador</strong>

    <strong>Sobrescrevendo os Métodos Abstratos:</strong>
    publico Metodo ligar()
        setLigado(verdadeiro)
    fimMetodo

    publico Metodo desligar()
        setLigado(falso)
    fimMetodo

    publico Metodo abrirMenu()
        Escreva(getLigado())
        Escreva(getVolume())
        Para i = 0 ate getVolume() passo 10 faça 
            Escreva("|")
        fimPara
        Escreva(getTocando())
    fimMetodo

    publico Metodo fecharMenu()
        Escreva("Fechando Menu...")
    fimMetodo

    publico Metodo maisVolume()
        Se (getLigado()) então 
            setVolume(getVolume() + 1)
        fimSe
    fimMetodo

    publico Metodo menosVolume()
        Se (getLigado()) então 
            setVolume(getVolume() - 1)
        fimSe
    fimMetodo

    publico Metodo ligarMudo()
        Se (getLigado() e getVolume() > 0) então 
            setVolume(0)
        fimSe
    fimMetodo

    publico Metodo desligarMudo()
        Se (getLigado() e getVolume() = 0) então 
            setVolume(50)
        fimSe
    fimMetodo

    publico Metodo ligarPlay()
        Se (getLigado() e não getTocando()) então 
            setPlay(verdadeiro)
        fimSe
    fimMetodo

    publico Metodo ligarPause()
        Se (getLigado() e getTocando()) então 
            setPlay(falso)
        fimSe
    fimMetodo

fimClasse
<hr>
        <h1>Projeto Controle Remoto</h1>
        <?php 
            // Carregando a Classe ControleRemoto:
            require_once "06_ControleRemoto.php";

            echo "<br><strong>Instanciando a Classe ControleRemoto: c = new ControleRemoto(); </strong>";
            $c = new ControleRemoto();

            // Usando as Funções do Controle Remoto:

            // Ligar:
            $c->ligar();

            // Baixar o Volume:
            // $c->setVolume(10); # Não permitido
            # Fatal error:  Uncaught Error: Call to private method ControleRemoto::setVolume() from global scope

            // Mais Volume:
            $c->maisVolume();

            // Dar Play:
            $c->play();

            // Ligar Mudo:
            // $c->ligarMudo();

            // Dar Pause:
            $c->pause();

            // Desligar:
            $c->desligar();

            // Abrir Menu:
            $c->abrirMenu();
                   
            // Fechar Menu:
            $c->fecharMenu();

        ?>
    </pre>
    
</body>
</html>