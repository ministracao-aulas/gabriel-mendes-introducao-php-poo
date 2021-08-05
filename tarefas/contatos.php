<?php

$contatos = [
    [
        "nome" => "Gabriel",
        "email" => "mendes.gabriel@icloud.com",
        "tels" => [
            "xxxxxxxx",
            "yyy",
        ],
    ],
    [
        "nome" => "jose",
        "email" => "jose.gabriel@icloud.com",
        "tels" => [
            "xxxxxxxx",
            "yyy",
        ],
    ],
    [
        "nome" => "andre",
        "email" => "andre.gabriel@icloud.com",
        "tels" => [
            "xxxxxxxx",
            "yyy",
        ],
    ],
    [
        "nome" => "tiago",
        "email" => "tiago.gabriel@icloud.com",
        "tels" => [
            "xxxxxxxx",
            "yyy",
        ],
    ],
];
echo "<ol>";
foreach($contatos as $contato):
?>

<li>
<ul>

    <li>nome: <?=$contato["nome"]?> </li>
    <li>email: <?=$contato["email"]?></li>
    
    <li>
        telefones:
        <? foreach($contato["tels"] as $tel):?>
            <?=$tel?> ,
        <?php endforeach;?>
    </li>
    
</ul>
</li>
<?php endforeach;?>
</ol>
