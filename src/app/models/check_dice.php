<?php
//check dice
// Déclarations de chaque dès
// un dès a 6 faces, il y a 5 dès
$dice_one = [1,2,3,4,5,6];
$dice_two = [1,2,3,4,5,6];
$dice_three = [1,2,3,4,5,6];
$dice_four = [1,2,3,4,5,6];
$dice_five = [1,2,3,4,5,6];

//Affiche tous les tableaux dans un seul tableau :
// $array_dice = array($dice_one, $dice_two, $dice_three, $dice_four, $dice_five);
// echo "<pre>";
// var_dump($array_dice);

// Lance les 5 dès / random
echo "Voici votre Premier lancer de dès : ";

$array_size = 5;
for ($i = 0; $i < $array_size; $i++){
    
        $array_dice = array(
            $dice_one[array_rand($dice_one)],
            $dice_two[array_rand($dice_two)],
            $dice_three[array_rand($dice_three)],
            $dice_four[array_rand($dice_four)],
            $dice_five[array_rand($dice_five)]
    );
}
echo '<pre>';
print_r($array_dice);
echo '</pre>';

$val_one = array_search('6', $array_dice);
echo '<pre>';
print_r($val_one);
echo '</pre>';

// vérifier si il y a un 6
    // si oui :
    if(in_array(6, $array_dice, true)){
        echo "1- Bien joué, vous avez votre bateau !";
        //     on retire le dès de 6
        
        
        
        
        //     on lance 4 dès
        //echo "Vous pouvez relancer les dès !";
    }
    
    
    // sinon :
    else{
        echo "1B- Pas de chance, relancé les dès !";
    }
        //on relance les 5 dès

// vérifier si il y a un 5
    // si oui :
    // if($result = array_search(5, $array_dice)){
    //     echo "2- Bien joué, vous avez votre capitaine !";
        
    // }
        // on retire le dès de 5
        // on lance 3 dès
    
    //sinon :
    // else{
    //     echo "2b- Pas de chance, relancé les dès !";
    // }
        //on relance les 4 dès

// vérifier si il y a un 4
    // si oui :
    // if($result = array_search(4, $array_dice)){
    //     echo "3- Bravo matelot vous avez gagné !";
        
    // }
        // on retire le dès de 4
        // on compte la somme des 2 autres dès restant
    
    //sinon :
    // else{
    //     echo "3b- Vous avez perdu !";
    // }
        //on a perdu
?>