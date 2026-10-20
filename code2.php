<?php 
// 20/10/2026

// Exercice1
$fruits=["Pomme", "Raisin", "Avocat", "Kiwi", "Banane"];
$i=0;
foreach($fruits as $fruit){
    $i+=1;

}
echo "Le nombre de fruits est: ". ($i)." fruits.<br>";
foreach($fruits as $fruit){
    echo "$fruit<br>";
}

$fruits[5]="Kiwi2";
echo "Nouveau tableau: <br>";
foreach($fruits as $fruit){
    echo "$fruit<br>";
}

echo "Le tableau avec la boucle for: <br>";
for($i=0;$i<sizeof($fruits);$i++){
    echo "$fruits[$i]<br>";
}

$position=array_search("Banane", $fruits);

if($position==true){
    $fruits[$position]="Poire";
}
echo "Banane existe et sa position est: $position.<br>";
// Remplacer

// Afficher le tableau mis à jour
echo "Dernier affichage du tableau.<br>";
for($i=0; $i<sizeof($fruits);$i++){
    echo "$fruits[$i]<br>";
}
?>
