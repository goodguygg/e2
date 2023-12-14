# Project 3
+ By: *Grigory Gonastarev*
+ URL: <http://e2p3.grgharv.bio>

## Graduate requirement
*x one of the following:*
+ [X] I have integrated testing into my application
+ [ ] I am taking this course for undergraduate credit and have opted out of integrating testing into my application

## Outside resources
*Prompts*
+ using codeception how do I affirm that element from $I->seeElement is equal to a certain string



## Notes for instructor
*None*

## Codeception testing output
```text
root@php-class:/var/www/e2/p3# php vendor/bin/codecept run Acceptance --steps
Codeception PHP Testing Framework v5.0.12 https://stand-with-ukraine.pp.ua

Tests.Acceptance Tests (2) 
------------------------------------------------------------------------------------------------------------------
GameCest: Play game
Signature: Tests\Acceptance\GameCest:playGame
Test: tests/Acceptance/GameCest.php:playGame
Scenario --
 I am on page "/"
 I fill field "[test=guess-number]",4
 I click "[test=submit]"
 I see element "[test=results]"
 I grab text from "[test=roll]"
 Roll was 10 choice was 4
 I see "lost","[test=result]"
 PASSED 

GameCest: Check history and games
Signature: Tests\Acceptance\GameCest:checkHistoryAndGames
Test: tests/Acceptance/GameCest.php:checkHistoryAndGames
Scenario --
 I am on page "/history"
 I grab multiple "[test=game-link]"
 I assert greater than or equal 2,23
 I grab text from "[test=game-link]"
 I click "2023-12-14 20:56:23"
 I see "2023-12-14 20:56:23"
 PASSED 

---------------------------------------------------------------------------------------------------------------------------------------------
Time: 00:00.381, Memory: 12.00 MB

OK (2 tests, 5 assertions)