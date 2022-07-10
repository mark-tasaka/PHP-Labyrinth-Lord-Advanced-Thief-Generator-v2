<?php

function demiHumanBreathMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 2;
    }
    else if($race === "Gnome")
    {
        $saveMod = 2;
    }
    else if($race === "Halfling")
    {
        $saveMod = 2;
    }
    
    return $saveMod;
    
}


function demiHumanPoisonMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 4;
    }
    else if($race === "Gnome")
    {
        $saveMod = 4;
    }
    else if($race === "Halfling")
    {
        $saveMod = 4;
    }
    
    return $saveMod;
    
}


function demiHumanPetrifyMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 4;
    }
    else if($race === "Gnome")
    {
        $saveMod = 4;
    }
    else if($race === "Halfling")
    {
        $saveMod = 4;
    }
    
    return $saveMod;
    
}



function demiHumanWandMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 3;
    }
    else if($race === "Gnome")
    {
        $saveMod = 1;
    }
    else if($race === "Halfling")
    {
        $saveMod = 3;
    }
    
    return $saveMod;
    
}

function demiHumanSpellMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 4;
    }
    else if($race === "Gnome")
    {
        $saveMod = 2;
    }
    else if($race === "Halfling")
    {
        $saveMod = 4;
    }
    
    return $saveMod;
    
}

/*Thief Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Dwarf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Elf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Gnome")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Halfling")
    {
        if($level <= 14)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 14;
        }
    }
    else if($race === "Half-Elf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Half-Orc")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}

function demiHumanTraits($species)
{
    $traits = "";
    
    if($species === "Dwarf")
    {
        $traits = "Infravision 60'<br/>2 in 6 chance of detecting traps, false walls, hidden constructs,
        or noticing if passages are slopped. <br/>Ability to speak the Common tongue, Dwarvish, Alignment
        tongue, Goblin, Gnome and Kobold.<br/>*Cannot use two-handed weapons or longbows.";
    }
    else if($species === "Elf")
    {
        $traits = "Infavision 60'<br/>When actively searching, elves are able to detect hidden and secret doors on a roll of 1-2 on a d6.<br/>Unaffected by the papralysis ghouls inflict.<br/>Able to speak the Common tongue, the Alignment tongue, Elvish, Gnoll, Hobgoblin and Orc.";
    }
    else if($species === "Gnome")
    {
        $traits = "Infravision 60'<br/>
        2 in 6 chance of detecting decrepit or unsafe structures, knowing the current depth and direction underground and knowing if passages are sloped. <br/>
        Ability to speak the Common tongue, Gnomish, Dwarvish, Halfling, Orc, Goblin, Kobold and the Alignment tongue.
        <br/>*Cannot use large or two-handed weapons.";
    }
    else if($species === "Halfling")
    {
        $traits = "90% ability to hide in bushes or outdoor cover. <br/>2 in 6 chance of hiding in shadows or behind cover in 
        underground environments. <br/>+1 to all missile attack rolls. <br/>-2 AC bonus when attack by creatures greater than human sized.<br/>*Cannot use large or two-handed weapons.";
    }
    else if($species === "Half-Elf")
    {
        $traits = "Infavision 60'<br/>When actively searching, half-elves are able to detect hidden and secret doors on a roll of 1-2 on a d6.<br/>+4 to saving throws against the papralyzing effect of ghouls.<br/>Able to speak the Common tongue, Elvish, the Alignment tongue, Gnoll, Hobgoblin and Orc.";
    }
    else if($species === "Half-Orc")
    {
        $traits = "Infavision 60'<br/>When actively searching, half-orcs are able to detect hidden and secret doors on a roll of 1-2 on a d6.<br/>Able to speak the Common tongue, the Alignment tongue, Hobgoblin and Orc.";
    }
    
    return $traits;

}



?>