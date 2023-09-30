<?php

namespace Egorovaoa02\TicTacToe\Controller;

use Egorovaoa02\TicTacToe\View\View;
use function cli\line;

class Controller
{
    public function startGame()
    {
        line("Start the game!");

        $view = new View();
        $view->showGame();        
    }

}