<?php


namespace Tests\Acceptance;

use Tests\Support\AcceptanceTester;

class GameCest
{
    public function playGame(AcceptanceTester $I)
    {
        $I->amOnPage('/');
        $choice = rand(2, 12);
        $I->fillField('[test=guess-number]', $choice);
        $I->click('[test=submit]');
        $I->seeElement('[test=results]');

        $roll = $I->grabTextFrom('[test=roll]');
        $I->comment('Roll was '.$roll.' choice was '.$choice);

        if($roll == $choice) {
            $I->see('won', '[test=result]');
        } else {
            $I->see('lost', '[test=result]');
        }
    }

    public function checkHistoryAndGames(AcceptanceTester $I)
    {
        $I->amOnPage('/history');
        $round_count = count($I->grabMultiple('[test=game-link]'));
        $I->assertGreaterThanOrEqual(2, $round_count);

        $timestamp = $I->grabTextFrom('[test=game-link]');
        $I->click($timestamp);
        $I->see($timestamp);
    }
}
