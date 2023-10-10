<?php

function validateMail($mail)
{
    if (preg_match("/^\\S+@\\S+\\.\\S+$/", $mail)) { //usa una regex para comprobar que la string tiene formato de correo electronico 
        return true;
    } else {
        echo "El correo no es valido<br>";
        return false;
    }
}
function isNumber($num)
{
    if (is_numeric($num)) {  //comprueba si el valoe enviado es numerico, no int
        return true;
    } else {
        echo "El dinero no es valido<br>";
        return false;
    }
}
function hasContent($str)
{ //comprueba si el nombre esta vacio
    if (!empty($str)) {
        return true;
    } else {
        echo "El nombre esta vacio<br>";
        return false;
    }
}


function isNameValid($name)
{
    $regex   = '/^[A-Za-z]{3,15}$/';
    if (preg_match($regex, $name)) {
        return true;
    } else {
        return false;
    }
}

function isRolValid($rol)
{
    if ($rol == "picaro" || $rol == "mago" || $rol == "guerrero" || $rol == "arquero") {
        return true;
    } else {
        return false;
    }
}

function isFeatureValid($feature)
{
    if (!is_array($feature)) {
        return false;
    }
    $validFeatures = array("extrovertido", "valiente", "habilidoso", "inteligente");
    foreach ($feature as $value) {
        if (!in_array($value, $validFeatures)) {
            return false;
        }
    }

    return true;
}
