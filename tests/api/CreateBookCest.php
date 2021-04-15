<?php

class CreateBookCest
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
            "price" => 49.99,
            "isbn" => "testowy-isbn",
            "published" => 1900,
            "status" => 0,
            "image_url" => "/uploads/img/krzyzacy.jpg",
            "description" => "Powieść historyczna Henryka Sienkiewicza publikowana w latach 1897–1900 w Tygodniku Ilustrowanym"
        ]);
        $I->seeResponseCodeIs(201);
        $I->seeResponseIsJson();
        $I->canSeeResponseContainsJson(["author" => "H.Sienkiewicz"]);
        $I->canSeeResponseContainsJson(["title" => "Krzyżacy"]);
        $I->canSeeResponseContainsJson(["isbn" => "testowy-isbn"]);
    }
}
