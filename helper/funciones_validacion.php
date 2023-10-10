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
