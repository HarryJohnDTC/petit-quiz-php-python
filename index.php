<?php
echo "Quelle est la capitale de Madagascar ?\n";
echo "1. Tuléar\n2. Tanà\n3. Antsirabe\n4. Majunga\n\n";

$capitale = readline("Choisissez entre la reponse 1, 2, 3 et 4 :  ");  


if ($capitale == '2') {
    system('cls');
    echo "Bonne reponse";
} else {
    system('cls');
    echo "Mauvaise reponse, Tanà est la capitale de Madagascar";
}
?>
