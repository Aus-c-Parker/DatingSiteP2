<?php

function validName($name)
{
    return !empty($name);
}

function validAge($age) {
    return $age > 18;
}

function validGender($gender) {
    return $gender == "male" || $gender == "female";
}

function validPhone($phone) {
    return strlen($phone) == 10;
}

function validEmail($email) {
    return strlen($email) == 10;
}

function validIndoor($indoor)
{
    $validInterests = getIndoor();
    return in_array($indoor, $validInterests);
}

function validOutdoor($outdoor)
{
    $validInterests = getOutdoor();
    return in_array($outdoor, $validInterests);
}


