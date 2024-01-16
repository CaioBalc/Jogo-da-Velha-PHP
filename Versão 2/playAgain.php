<?php

function playAgain(): bool {
    $result = readLine ("\nDeseja jogar noamente? (s/n): ");

    if ($result === "s" || $result === "S"){
        return true;
    } else{
        return false;
    }

    return $result === "s"? true : false;
}