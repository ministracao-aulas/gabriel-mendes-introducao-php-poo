<?php
require_once __DIR__.'/../../index.php';


if(
    !isset($_GET["cep_origem"]) ||
    !isset($_GET["destinatario_nome"]) ||
    !isset($_GET["cep_destino"])
)
dieError('Valores incorretos ou ausentes');
    // header('Location: index.php');

$token      = '605fd2ffd951df5b80b62b2f4ce83d8e488a19bae22fa3debabafe642e871e8e';
$client     = new \GuzzleHttp\Client();
$body       = [
    'from' => $_GET["cep_origem"],
    'to' => $_GET["cep_destino"],
    'cargo_types' => [
        13,
        37
    ],
    'invoice_amount' => '201.92',
    'volumes' => [
        [
            "quantity" => 1,
            "width" => 10.2,
            "height" => 8,
            "length" => 4,
            "weight" => 3
        ]
    ],
    'recipient' => [
        "document" => "22531311000110",
        "name" => $_GET["destinatario_nome"]
    ],
];

// $response   = $client->post("https://api.centraldofrete.com/v1/quotation", [
//     'headers' => [
//             'Authorization' => $token,
//             'Content-Type' => 'application/json',
//         ],
//     'json' => $body,
// ]);
// $body = $response->getBody();

//Para não fazer a requisição por enquanto
$body = file_get_contents(__DIR__.'/resultado_cotacao.json');
$response_data = json_decode((string) $body, true);
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
        <h5>Resultado da Cotação</h5>
        <h5>Código da cotação: <?=$response_data['code'] ?></h5>
        <table>
            <tbody>
                <tr>
                    <th colspan="2">REMETENTE</th>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th>Nome</th>
                    <td><?=$response_data['sender']['name'] ?></td>
                </tr>
                <tr>
                    <th>CEP Origem</th>
                    <td><?=$response_data['sender']['address']['zipcode'] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>