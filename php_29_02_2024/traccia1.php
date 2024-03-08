<?php


$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Filippo', 'surname' => 'Bianchi', 'gender' => 'M'],
    ['name' => 'Ludovica', 'surname' => 'Rossi' , 'gender' => 'F']
    
];

for ($i = 0; $i < count($users); $i++) {
    $user = $users[$i];
    $greeting = ($user['gender'] === 'F') ? "Buongiorno Sig.ra " : "Buongiorno Sig. ";
    echo $greeting . $user['name'] . " " . $user['surname'] . "\n";
}

?>