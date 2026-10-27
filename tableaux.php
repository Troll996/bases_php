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

<?php 
// 20/10/2026

// Exercice2

//1
$fruits=["Pomme"=>"Rouge", "Banane"=>"Jaune","Orange"=>"Orange","Mangue"=>"Jaune","Ananas"=>"Marron"];
$i=0;
foreach($fruits as $f){
    $i+=1;
}
echo "Le nombre total de fruits est: $i<br>";

//2
foreach($fruits as $cle=>$val){
    echo "Fruit: $cle / Couleur: $val. <br>";
}

//3
$fruits["Kiwi"]="Vert";
echo "Les valeurs du nouveau tableau: <br>";
foreach($fruits as $cle=>$val){
    echo "Fruit: $cle / Couleur: $val. <br>";
}

//4
$p_exist=array_key_exists("Pomme", $fruits);
echo "$p_exist<br>";
if($p_exist==1){
    echo "Cet élèment existe. <br>";
}else{
    echo "Cet élèment n'existe pas. <br>";
}

//5 
unset($fruits["Ananas"]);
foreach($fruits as $cle=>$val){
    echo "Fruit: $cle / Couleur: $val <br>";
}

//6
$s=0;
foreach($fruits as $cle=>$val){
    if ($val=="Jaune"){
        $s+=1;
    }
    
}
echo "Le nombre de fruits de couleur jaune: $s <br><br><br><br><br>";
?>

<!DOCTYPE HTML>
<HTML>
    <head>
        <title>Les Fruits o dackhi</title>
    </head>
    <body>
        
        <table>
            <tr>
                <th>Fruits</th>
                <th>Couleurs</th>
            </tr>
            <?php foreach($fruits as $cle=>$val): ?>
                <tr>
                    <td><?= htmlspecialchars($cle) ?></td>
                    <td><?= htmlspecialchars($val) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </body>
</HTML>


<?php 
//Exercice5
$personnes= array(
'mdupond'=>array('prenom'=>'Martin', 'nom'=>'Dupond', 'age'=>25, 'ville'=>'Paris'),
'jm'=>array('prenom'=>'Jean', 'nom'=>'Martin', 'age'=>20, 'ville'=>'Villetaneuse'),
'toto'=>array('prenom'=>'Tom', 'nom'=>'Tonge', 'age'=>18, 'ville'=>'Epinay'),
'arn'=>array('prenom'=>'Arnaud', 'nom'=>'Dupond', 'age'=>33, 'ville'=>'Paris'),
'email'=>array('prenom'=>'Emilie', 'nom'=>'Ailta', 'age'=>46, 'ville'=>'Villetaneuse'),
'dask'=>array('prenom'=>'Damien', 'nom'=>'Askier', 'age'=>7, 'ville'=>'Villetaneuse')
);

echo '<table  border=1>
        <thead>
            <tr>
                <th>Prénom</th>
                <th>Nom</th>
                <th>Âge</th>
                <th>Ville</th>
            </tr>
        </thead>
      ';

foreach($personnes as $cle=>$val){
    echo "<tr><br>";
    foreach($val as $cle1=>$val1){
        echo"<td>$val1</td>";      
             
    }
    echo "</tr><br>";
    
};      
echo "</table>";
