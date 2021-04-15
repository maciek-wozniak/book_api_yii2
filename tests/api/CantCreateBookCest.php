<?php

class CantCreateBookCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendPost('/book', [
            "author" => "H.Sienkiewicz",
            "title" => "Krzyżacy",
        ]);
        $I->seeResponseCodeIs(422);
        $I->seeResponseIsJson();
    }
}
