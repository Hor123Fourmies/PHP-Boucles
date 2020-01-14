<?php


#PHP - Les boucles

##Exercice 1
##Créer une variable et l'initialiser à 0.
##Tant que cette variable n'atteint pas 10, il faut :

    //l'afficher
    //l'incrementer

$nombre = 0;

for ($i=0; $i<10; $i++){
    echo $nombre++."<br>";
}



##Exercice 2
##Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.

//Tant que la première variable n'est pas supérieure à 20 :

    //multiplier la première variable avec la deuxième
    //afficher le résultat
    //incrementer la première variable

$nombre1 = 0;
$nombre2 = 50;

while ($nombre1<20){
    echo $nombre1*$nombre2."<br>";
    $nombre1++;
}


##Exercice 3
##Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.
##Tant que la première variable n'est pas inférieure ou égale à 10 :

    //multiplier la première variable avec la deuxième
    //afficher le résultat
    //décrémenter la première variable

$nb1 = 100;
$nb2 = 20;
while ($nb1>10){
    echo $nb1*$nb2."<br>";
    $nb1--;
}


##Exercice 4
##Créer une variable et l'initialiser à 1.
##Tant que cette variable n'atteint pas 10, il faut :

    //l'afficher
    //l'incrementer de la moitié de sa valeur

$nbA = 1;
while ($nbA<10){
    echo $nbA."<br>";
    $nbA=$nbA+0.5;
}

##Exercice 5
##En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque.

$ex5 = 1;
while ($ex5<=15){
    echo "On y arrive presque"."<br>";
    $ex5++;
}

##Exercice 6
##En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon.

$ex6 = 20;
while ($ex6>0){
    echo "C'est presque bon"."<br>";
    $ex6--;
}

##Exercice 7
##En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout.

$ex7 = 1;
while ($ex7<100){
    echo $ex7;
    echo "On tient le bon bout"."<br>";
    $ex7 = $ex7+15;
}

##Exercice 8
##En allant de 200 à 0 avec un pas de 12, afficher le message Enfin !!!!.

$ex8 = 200;
while ($ex8>0){
    echo $ex8;
    echo "Enfin"."<br>";
    $ex8 = $ex8-12;
}