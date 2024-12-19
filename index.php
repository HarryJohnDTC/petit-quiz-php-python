<?php

$note = 0;

function effacer_ecran() {
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        system('cls');
    } else {
        system('clear');
    }
}

function quitterApp() {
    global $note;
    if ($note < 5) {
        echo "Vous n'avez pas eu la moyenne, vous avez obtenu une note de " . $note . "/10\n";
    } else {
        echo 'Bravo !! Votre score est : ' . $note . '/10' . "\n";
    }

    echo 'Appuyer sur "q" pour quitter ou sur "r" pour recommencer: ';
    $rejouer = readline();

    if ($rejouer === 'q') {
        effacer_ecran();
        exit();
    } elseif ($rejouer === 'r') {
        effacer_ecran();
        play();
    } else {
        effacer_ecran();
        echo 'Commande non reconnue' . "\n";
        quitterApp();
    }
}

function play() {
    global $note;

    echo 'Quelle est la capitale de Madagascar ?' . "\n";
    echo '"q" pour quitter' . "\n";
    echo '1. Tulear' . "\n";
    echo '2. Tanà' . "\n";
    echo '3. Diégo' . "\n";
    echo '4. Tamatave' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '2') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Madagascar se trouve dans quel continent ?' . "\n";
    echo '1. Europe' . "\n";
    echo '2. Amérique' . "\n";
    echo '3. Afrique' . "\n";
    echo '4. Asie' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '3') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Madagascar se trouve dans quel océan ?' . "\n";
    echo '1. Indien' . "\n";
    echo '2. Pacifique' . "\n";
    echo '3. Atlantique' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 : ';
    $capitale = readline();

    if ($capitale === '1') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Quelle tropique passe sur Madagascar ?' . "\n";
    echo '1. Cancer' . "\n";
    echo '2. Capricorne' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2 : ';
    $capitale = readline();

    if ($capitale === '2') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Quelle est la première langue officielle de Madagascar ?' . "\n";
    echo '1. Français' . "\n";
    echo '2. Anglais' . "\n";
    echo '3. Malgache' . "\n";
    echo '4. Espagnol' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '3') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Qui est l\'actuel président de Madagascar ?' . "\n";
    echo '1. Marc Ravalomanana' . "\n";
    echo '2. Andry Rajoelina' . "\n";
    echo '3. Didier Ratsiraka' . "\n";
    echo '4. Zafy Albert' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '2') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'C\'est quand la fête nationale de Madagascar ?' . "\n";
    echo '1. 25 Décembre' . "\n";
    echo '2. 01 Mai' . "\n";
    echo '3. 14 Février' . "\n";
    echo '4. 26 Juin' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '4') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Qui est le premier européen qui a découvert Madagascar ?' . "\n";
    echo '1. Emmanuel Macron' . "\n";
    echo '2. Napoléon' . "\n";
    echo '3. Diégo Diaz' . "\n";
    echo '4. Christophe Colomb' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '3') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Comment s\'appelle le lion dans le dessin animé Madagascar ?' . "\n";
    echo '1. Alex' . "\n";
    echo '2. Simba' . "\n";
    echo '3. Mufasa' . "\n";
    echo '4. Basta Lion' . "\n";
    echo 'q. quitter' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '1') {
        effacer_ecran();
        $note++;
    } elseif ($capitale === 'q') {
        quitterApp();
    }

    echo 'Comment s\'appelle l\'équipe de basket malgache ?' . "\n";
    echo '1. Barea' . "\n";
    echo '2. Scorpion' . "\n";
    echo '3. Sifaka' . "\n";
    echo '4. Ankoay' . "\n";
    echo 'Choisissez entre la reponse 1, 2, 3 et 4 : ';
    $capitale = readline();

    if ($capitale === '4') {
        effacer_ecran();
        $note++;
    }

    quitterApp();
}

play();

?>
