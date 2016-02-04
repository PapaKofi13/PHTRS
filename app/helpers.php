<?php

function setUrgency($size)
{
    $urgency = 0;
    switch($size)
    {
        case 1:
        case 2:
        case 3:
            $urgency = 1;
            break;
        case 4:
        case 5:
        case 6:
        case 7:
            $urgency = 2;
            break;
        case 8:
        case 9:
        case 10:
            $urgency = 3;
            break;

    }
    return $urgency;
}

function explodeAddress($address)
{
    $add = explode(',',$address);
    return $add;
}