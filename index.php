<?php

use Src\RelationshipAnalyzer\RelationshipAnalyzer;

require_once 'vendor/autoload.php';

$analyzer = new RelationshipAnalyzer();

while (true) {
    $name = readline("Entre com o seu nome: ");
    $relationship = readline("Digite a relação com a FATEC: ");

    $result = $analyzer->analyzeRelationship($name, $relationship);
    echo $result . PHP_EOL;

    $continue = readline("Digite 'q' para sair ou qualquer outra tecla para continuar: ");
    if (strtolower($continue) == "q") {
        break;
    }
}
