<?php 

// Programme 1
echo "Admis ou pas admis <br><br>";
$note=18;
echo "Note: $note <br>";
if ($note >= 10){
    echo "Resultat: Admis<br>";
} else {
    echo "Resultat: Non Admis<br>";
}

// Programme 2

$montant = 6000;

echo "Montant brut: $montant Dh <br>"; 

if ($montant < 2000) {
    echo "Pas de remise. Le montant final est: $montant Dh<br>";
} else if ($montant >= 2000 && $montant <= 5000) {
    echo "Remise: " . ($montant * 0.01) . " Dh<br>";
    echo "Montant final: " . ($montant - $montant * 0.01) . " Dh";
} else {
    echo "Remise: " . ($montant * 0.02) . " Dh<br>";
    echo "Montant final: " . ($montant - $montant * 0.02) . " Dh <br>";
}


// Programme 3
$i=1;
do {
    echo "$i <br>";
    $i++;
}while($i<=5);

// Programme 4
$mot = "anticonstitutionnellement";
$voyelles= ["a", "o", "u", "i", "e", "y"];
$i = 0;                          
$longueur = strlen($mot);        
echo "Les voyelles dans $mot sont: ";
do {
    if (in_array($mot[$i], $voyelles)){
        echo "$mot[$i], ";
        $i++;
    } else{
        $i++;
    }
    
    
} while ($i < $longueur); 

echo "<br><br><br>";

// Programme 5: Utiliser la boucle for pour afficher les nombres de 1 jusqu'à 10
echo "Programme 5: <br>";
echo "Voici les nombres paires de 1 jusqu'à 10: <br>";
for($i=2; $i<=10; $i += 2){
    echo "$i<br>";
}

// Programme 6: Afficher la table de multiplication de 7: 1 à 10
echo "Programme 6: <br>";
for ($i=1; $i<=10; $i++){
    echo "7 x $i = ".($i*7). "<br>";
}


// Programme 7: 

echo "Programme 7: <br>";
$mot1="informatique";
for($i=strlen($mot1)-1; $i>=0; $i--){
    echo "$mot1[$i]";
}

?> 






















