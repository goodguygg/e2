<?php

# Define the routes of your application

return [
    # Ex: The path `/` will trigger the `index` method within the `AppController`
    '/' => ['AppController', 'index'],
    '/play' => ['AppController', 'playGame'],
    '/history' => ['GameController', 'index'],
    '/game' => ['GameController', 'gameInfo'],
];



