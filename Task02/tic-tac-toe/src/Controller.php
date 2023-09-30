<?php

namespace PUMUSHKA\TicTacToe\Controller;

use PUMUSHKA\TicTacToe\View\View;
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