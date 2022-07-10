<?php


function thiefMessage ($level)
{
    $message = "";
    
    if($level >= 1 && $level <= 3)
    {
        $message = "";
    }
    else if($level >= 4 && $level <= 8)
    {
        $message = "80% probability of reading languages (any non-magical writings).";
    }
    else if($level == 9)
    {
        $message = "80% probability of reading languages (any non-magical writings).<br/>
                    Can establish a thief's den, with 2d6 1st level thief apprentices.";
    }
    else
    {
        $message = "80% probability of reading languages (any non-magical writings).<br/>
                    Can establish a thief's den, with 2d6 1st level thief apprentices.<br/>
                    Can read and cast magic from magic-user/elf scrolls with 90% accuracy.";
    }
    
    return $message;
    
}

function getPickLocks($level)
{
    if($level == 1)
    {
        return 17;
    }
    else if($level == 2)
    {
        return 23;
    }
    else if($level == 3)
    {
        return 27;
    }
    else if($level == 4)
    {
        return 31;
    }
    else if($level == 5)
    {
        return 35;
    }
    else if($level == 6)
    {
        return 45;
    }
    else if($level == 7)
    {
        return 55;
    }
    else if($level == 8)
    {
        return 65;
    }
    else if($level == 9)
    {
        return 75;
    }
    else if($level == 10)
    {
        return 85;
    }
    else if($level == 11)
    {
        return 95;
    }
    else if($level == 12)
    {
        return 97;
    }
    else
    {
        return 99;
    }

}


function getFindTrap($level)
{
    if($level == 1)
    {
        return 14;
    }
    else if($level == 2)
    {
        return 17;
    }
    else if($level == 3)
    {
        return 20;
    }
    else if($level == 4)
    {
        return 23;
    }
    else if($level == 5)
    {
        return 33;
    }
    else if($level == 6)
    {
        return 43;
    }
    else if($level == 7)
    {
        return 53;
    }
    else if($level == 8)
    {
        return 63;
    }
    else if($level == 9)
    {
        return 73;
    }
    else if($level == 10)
    {
        return 83;
    }
    else if($level == 11)
    {
        return 93;
    }
    else if($level == 12)
    {
        return 95;
    }
    else if($level == 13)
    {
        return 97;
    }
    else
    {
        return 99;
    }

}



function getPickPockets($level)
{
    if($level == 1)
    {
        return 23;
    }
    else if($level == 2)
    {
        return 27;
    }
    else if($level == 3)
    {
        return 30;
    }
    else if($level == 4)
    {
        return 37;
    }
    else if($level == 5)
    {
        return 40;
    }
    else if($level == 6)
    {
        return 43;
    }
    else if($level == 7)
    {
        return 53;
    }
    else if($level == 8)
    {
        return 63;
    }
    else if($level == 9)
    {
        return 73;
    }
    else if($level == 10)
    {
        return 83;
    }
    else if($level == 11)
    {
        return 93;
    }
    else if($level == 12)
    {
        return 105;
    }
    else if($level == 13)
    {
        return 115;
    }
    else
    {
        return 125;
    }

}


function getMoveSilently($level)
{
    if($level == 1)
    {
        return 23;
    }
    else if($level == 2)
    {
        return 27;
    }
    else if($level == 3)
    {
        return 30;
    }
    else if($level == 4)
    {
        return 37;
    }
    else if($level == 5)
    {
        return 40;
    }
    else if($level == 6)
    {
        return 43;
    }
    else if($level == 7)
    {
        return 53;
    }
    else if($level == 8)
    {
        return 63;
    }
    else if($level == 9)
    {
        return 73;
    }
    else if($level == 10)
    {
        return 83;
    }
    else if($level == 11)
    {
        return 93;
    }
    else if($level == 12)
    {
        return 95;
    }
    else if($level == 13)
    {
        return 97;
    }
    else
    {
        return 99;
    }

}


function getClimbWall($level)
{
    if($level == 1)
    {
        return 87;
    }
    else if($level == 2)
    {
        return 88;
    }
    else if($level == 3)
    {
        return 89;
    }
    else if($level == 4)
    {
        return 90;
    }
    else if($level == 5)
    {
        return 91;
    }
    else if($level == 6)
    {
        return 92;
    }
    else if($level == 7)
    {
        return 93;
    }
    else if($level == 8)
    {
        return 94;
    }
    else if($level == 9)
    {
        return 95;
    }
    else if($level == 10)
    {
        return 96;
    }
    else if($level == 11)
    {
        return 97;
    }
    else if($level == 12)
    {
        return 98;
    }
    else if($level == 13)
    {
        return 99;
    }
    else
    {
        return 99;
    }

}


function getHideShadows($level)
{
    if($level == 1)
    {
        return 13;
    }
    else if($level == 2)
    {
        return 17;
    }
    else if($level == 3)
    {
        return 20;
    }
    else if($level == 4)
    {
        return 27;
    }
    else if($level == 5)
    {
        return 30;
    }
    else if($level == 6)
    {
        return 37;
    }
    else if($level == 7)
    {
        return 47;
    }
    else if($level == 8)
    {
        return 57;
    }
    else if($level == 9)
    {
        return 67;
    }
    else if($level == 10)
    {
        return 77;
    }
    else if($level == 11)
    {
        return 87;
    }
    else if($level == 12)
    {
        return 90;
    }
    else if($level == 13)
    {
        return 97;
    }
    else
    {
        return 99;
    }

}

function getHearNoise($level, $species)
{
    if($species == "Elf")
    {
        if($level <= 2)
        {
            return "1-3";
        }
        else if($level >= 3 && $level <= 5)
        {
            return "1-4";
        }
        else
        {
            return "1-5";
        }

    }
    else
    {
        if($level <= 2)
        {
            return "1-2";
        }
        else if($level >= 3 && $level <= 5)
        {
            return "1-3";
        }
        else if($level >= 6 && $level <= 9)
        {
            return "1-4";
        }
        else
        {
            return "1-5";
        }
    }

}


function adjustPickLocks ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 7;
    }
    else if($species === "Elf")
    {
        $adjust = -5;
    }
    else if($species === "Gnome")
    {
        $adjust = 5;
    }
    else if($species === "Halfling")
    {
        $adjust = 5;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustFindRemoveTraps ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 10;
    }
    else if($species === "Elf")
    {
        $adjust = 0;
    }
    else if($species === "Gnome")
    {
        $adjust = 7;
    }
    else if($species === "Halfling")
    {
        $adjust = 5;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}



function adjustPickPockets ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 0;
    }
    else if($species === "Elf")
    {
        $adjust = 5;
    }
    else if($species === "Gnome")
    {
        $adjust = 0;
    }
    else if($species === "Halfling")
    {
        $adjust = 5;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 10;
    }
    else if($species === "Half-Orc")
    {
        $adjust = -5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustMoveSilently ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 0;
    }
    else if($species === "Elf")
    {
        $adjust = 7;
    }
    else if($species === "Gnome")
    {
        $adjust = 5;
    }
    else if($species === "Halfling")
    {
        $adjust = 10;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 0;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function adjustClimbWalls ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = -10;
    }
    else if($species === "Elf")
    {
        $adjust = 0;
    }
    else if($species === "Gnome")
    {
        $adjust = -15;
    }
    else if($species === "Halfling")
    {
        $adjust = -15;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 0;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 5;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}



function adjustHideShadow ($species)
{
    $adjust = 0;
    
    if($species === "Dwarf")
    {
        $adjust = 0;
    }
    else if($species === "Elf")
    {
        $adjust = 10;
    }
    else if($species === "Gnome")
    {
        $adjust = 5;
    }
    else if($species === "Halfling")
    {
        $adjust = 10;
    }
    else if($species === "Half-Elf")
    {
        $adjust = 5;
    }
    else if($species === "Half-Orc")
    {
        $adjust = 0;
    }
    else
    {
        $adjust = 0;
    }
    
    return $adjust;
    
}


function hearNoiseAdjust ($species, $level)
{
    
    $adjust = 0;
    
    if($species === "Elf" && $level <= 9)
    {
        $adjust = 1;
    }
    
    return $adjust;
    
}



?>