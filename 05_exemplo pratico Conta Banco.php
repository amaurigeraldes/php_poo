<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Aula 05 - PHP POO</title>
</head>

<body>
    <h1>Aula 05 - PHP POO</h1>
    <h2>Exemplo Prático com Objetos: Conta Banco</h2>

    <pre>
        <?php 
            // Carregando a Classe ContaBanco:
            require_once "05_contabanco.php";

            // Definindo os clientes:
            $pessoa1 = new ContaBanco(); # Jubileu
            $pessoa2 = new ContaBanco(); # Creuza

            // Abrindo as contas dos clientes:
            
            # Conta do Jubileu
            $pessoa1->setDono("Jubileu");
            $pessoa1->abrirConta("CC");
            $pessoa1->setNumConta("0001-2");
            
            # Conta do Creuza
            $pessoa2->setDono("Creuza");
            $pessoa2->abrirConta("CP");
            $pessoa2->setNumConta("0002-1");
            

            // Fazendo depósitos nas contas dos clientes:
            $pessoa1->depositar(300);
            $pessoa2->depositar(500);

            // Fazendo saques nas contas dos clientes:
            $pessoa1->sacar(0);
            $pessoa2->sacar(100);

            // Debitando a Mensalidade das contas dos clientes:
            $pessoa1->pagarMensal();
            $pessoa2->pagarMensal();

            // Fazendo saques nas contas dos clientes:
            $pessoa1->sacar(338);
            $pessoa2->sacar(500);

            // Fechando as contas dos clientes:
            # Conta do Jubileu
            $pessoa1->fecharConta();
            # Conta do Creuza
            $pessoa2->fecharConta();


            echo "<hr>";
            print_r($pessoa1);
            print_r($pessoa2);
            
        
        ?>
    </pre>
    
</body>
</html>