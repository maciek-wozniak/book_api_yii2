<?php

class GetBooksCest
{
    public function _before(ApiTester $I)
    {
    }

    // tests
    public function tryToTest(ApiTester $I)
    {
        $I->sendGET('/book');
        $I->seeResponseCodeIs(200);
        $I->seeResponseIsJson();
    }
}
