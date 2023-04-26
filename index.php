<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Banco do Zira</title>
</head>
<body>
    <pre>
        <?php
        require_once 'ContaBanco.php';

        $conta1 = new ContaBanco();

        $conta2 = new ContaBanco();

        $conta1-> abrirConta("CP");
        $conta1-> setDono("Álvaro");
        $conta2-> abrirConta("CC");
        $conta2-> setDono("Isadora");

        $conta1-> depositar(100);

        $conta2-> sacar(50);

        $conta1-> pagarMensal();

        $conta2-> fecharConta();

        print_r($conta1);

        print_r($conta2);
        
        ?>
    </pre>

    <div class="botoes">
        <button onclick="abrirConta()">Abrir Conta</button>
        <button onclick="fecharConta()">Fechar Conta</button>
    </div>
</body>
</html>