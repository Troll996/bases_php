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
?> 






















