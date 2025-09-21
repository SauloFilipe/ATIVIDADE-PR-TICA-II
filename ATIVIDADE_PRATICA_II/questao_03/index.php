<?php

$produtos = [
                ["nome" => "Laranja", "quantidade" => 32,"preco" => 5],
                ["nome" => "Uva", "quantidade" => 15, "preco" => 12],
                ["nome" => "Goiaba", "quantidade" => 23, "preco" => 10],
                ["nome" => "Melancia", "quantidade" => 9, "preco" => 10],
];

foreach($produtos as $valor => $p){
    $produtos[$valor]['total'] = $p['quantidade'] * $p['preco'];
}

print_r($produtos);

?>