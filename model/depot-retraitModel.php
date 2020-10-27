<?php

function depot_retrait($db, $depot_retrait) {
    try {
        $db = new PDO('mysql:host=localhost;dbname=banque_php', 'banquePHP', 'banquePHP');
    } catch (PDOExeption $e) {
        print "Erreur !: " . $e->getMessage() . "<br/>";
        die();
    }

    $query = $db->prepare(
        "INSERT INTO Operation(operation_type, account_id, amount, operation_date)
        VALUES(:operation_type, :account_id, :amount, NOW())"
    );

    $depot_retrait = $query->execute([
        "account_id" => $operation["account_id"],
        "operation_type" => $operation["operation_type"],
        "amount" => $operation["amount"]
    ]);

    return $depot_retrait;
}
