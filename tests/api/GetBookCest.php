<?php

class GetBookCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGET('/book/1');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
        $I->canSeeResponseContainsJson(["id" => 1]);
        $I->canSeeResponseContainsJson(["author" => "H. Sienkiewicz"]);
    }
}
