<?php


function getClothing($input)
{
        $a00 = array("Belt, leather", 0);
        $a01 = array("Belt, wide leather", 1);
        $a02 = array("Boots, high hard leather", 3);
        $a03 = array("Boots, low hard leather", 2);
        $a04 = array("Boots, high soft leather", 2);
        $a05 = array("Boots, low soft leather", 1);
        $a06 = array("Cap, cloth", 0);
        $a07 = array("Cap, leather", 0);
        $a08 = array("Hat", 0);
        $a09 = array("Girdle", 1);
        $a10 = array("Cloak, cloth", 3);
        $a11 = array("Cloak, fur", 5);
        $a12 = array("Robe, cloth", 5);
        $a13 = array("Robe, silk", 3);
        $a14 = array("Shirt, cloth", 1);
        $a15 = array("Shirt, leather patched", 1);
        $a16 = array("Trousers, heavy", 4);
        $a17 = array("Trousers, light", 2);

        $arr= array($a00, $a01, $a02, $a03, $a04, $a05, $a06, $a07, $a08, $a09, $a10, $a11, $a12, $a13, $a14, $a15, $a16, $a17);
        
        return $arr[$input];
}

function getRandomClothing()
{
    $clothingArray = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17);

    $belt = rand(0, 1);
    $boots = rand(2, 5);
    $hat = rand(6, 8);
    $cloak = rand(10, 13);
    $shirt = rand(14, 15);
    $pants = rand(16, 17);
    
    $hasClothing = array();

    array_push($hasClothing, $clothingArray[$belt]);
    array_push($hasClothing, $clothingArray[$boots]);
    array_push($hasClothing, $clothingArray[$hat]);
    array_push($hasClothing, $clothingArray[$cloak]);
    array_push($hasClothing, $clothingArray[$shirt]);
    array_push($hasClothing, $clothingArray[$pants]);

    return $hasClothing;

}


?>