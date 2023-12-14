<?php

namespace App\Commands;
use Faker\Factory;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function fresh()
    {
        $this->migrate();
        $this->seed();
    }

    public function migrate()
    {
        $this->app->db()->createTable('game_results', [
            'dice_1' => 'int',
            'dice_2' => 'int',
            'sum' => 'int',
            'choice' => 'int',
            'result' => 'varchar(255)',
            'roll_time' => 'timestamp DEFAULT CURRENT_TIMESTAMP'
        ]);

        dump('Migration complete;');
    }

    public function seed()
    {

        $faker = Factory::create();
        // Example data for game_results
        $gameResults = [
            ['roll_time'=> $faker->dateTimeBetween('-10 days', '-2 days')->format('Y-m-d H:i:s'), 'dice_1' => 1, 'dice_2' => 3, 'sum' => 4, 'choice' => 4, 'result' => 'won'],
            ['roll_time'=> $faker->dateTimeBetween('-10 days', '-2 days')->format('Y-m-d H:i:s'), 'dice_1' => 2, 'dice_2' => 2, 'sum' => 4, 'choice' => 5, 'result' => 'lost'],
        ];
    
        foreach ($gameResults as $gameResult) {
            $this->app->db()->insert('game_results', $gameResult);
        }
    
        dump('Seeds complete;');
    }
}
