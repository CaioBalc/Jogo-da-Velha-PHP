<?php

function getPlayersName(): array
{
    return[
        readLine("Player 1 (" . PLAYER_ONE_ICON . ") - Digite seu nome: "),
        readLine("Player 2 (" . PLAYER_TWO_ICON . ") - Digite seu nome: "),
    ];
}