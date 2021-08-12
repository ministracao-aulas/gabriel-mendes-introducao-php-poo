<?php
require_once __DIR__.'/../../index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form action="<?= baseRoute('/app/cotacoes/cotar.php') ?>">
            <div>
                <label for="cep_origem">CEP_origem
                    <input type="text" id="cep_origem" name="cep_origem" placeholder="cep_origem" required>
                </label>
            </div>
            <div>
                <label for="destinatario_nome">destinatario_nome
                    <input type="text" id="destinatario_nome" name="destinatario_nome" placeholder="destinatario_nome" required>
                </label>
            </div>
            <div>
                <label for="cep_destino">CEP_destino
                    <input type="text" id="cep_destino" name="cep_destino" placeholder="cep_destino" required>
                </label>
            </div>
            <button type="submit">Cotar</button>
        </form>
    </div>
</body>
</html>