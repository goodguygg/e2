<?php
namespace App\Controllers;

class GameController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {

        $games = $this->app->db()->all('game_results');

        return $this->app->view('games/index', [
            'games' => $games
        ]);

    }

    public function gameInfo()
    {
        // Retrieve the game ID
        $gameId = $this->app->param('id');
    
        // Fetch the game details
        if ($gameId) {
            $game = $this->app->db()->findById('game_results', $gameId);
        }
    
        // Check if game exists
        if (!$game) {
            $this->app->redirect('/history');
        }
    
        // Render a view
        return $this->app->view('games/game_info', ['game' => $game]);
    }

}
