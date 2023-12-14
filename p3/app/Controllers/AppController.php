<?php
namespace App\Controllers;

class AppController extends Controller
{
    /**
     * This method is triggered by the route "/"
     */
    public function index()
    {
        $results = $this->app->old('results');

        return $this->app->view('index', [
            'welcome' => 'Dice Game',
            'results' => $results, 
        ]);

    }

    public function playGame()
    {
        $guess = $this->app->input('guess_number');
    
        // Dice rolls
        $dice1 = rand(1, 6);
        $dice2 = rand(1, 6);
    
        $dice_sum = $dice1 + $dice2;
    
        $outcome = ($guess == $dice_sum) ? 'won' : 'lost';
    
        // Prepare SQL query
        $sql = "INSERT INTO game_results (dice_1, dice_2, sum, choice, result) VALUES (:dice1, :dice2, :dice_sum, :guess, :outcome)";
    
        $results = [
            'dice1' => $dice1,
            'dice2' => $dice2,
            'dice_sum' => $dice_sum,
            'guess' => $guess,
            'outcome' => $outcome
        ];
    
        // Execute the query
        $this->app->db()->run($sql, $results);
    
        // Redirect
        return $this->app->redirect('/', ['results' => $results]);
    }
    
}
