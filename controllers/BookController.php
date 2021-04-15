<?php


namespace app\controllers;


use yii\rest\ActiveController;

/**
 * @OA\Info(
 *   version="1.0",
 *   title="Book API",
 *   description="Simple Book API",
 * ),
 */

class BookController extends ActiveController
{
    public $modelClass = 'app\models\Book';

    /**
     * @OA\Get(path="/book",
     *   summary="Index page - list of books",
     *   @OA\Response(
     *     response=200,
     *     description="Returns Book objects list",
     *   ),
     * ),
     * @OA\POST(path="/book",
     *     summary="Creating new book",
     *     @OA\RequestBody(
     *       request="/book",
     *       description= "Provide new book data",
     *       required=true,
     *       @OA\JsonContent(ref="#/components/schemas/Book"),
     *     ),
     *     @OA\Response(
     *       response=201,
     *       description="Returns added book",
     *       @OA\JsonContent(ref="#/components/schemas/Book"),
     *     ),
     *     @OA\Response(
     *       response=422,
     *       description="Returns Validation error when object does not pass validation"
     *     ),
     *     @OA\Response(
     *       response=500,
     *       description="Returns error when something went wrong"
     *     ),
     *  ),
     * @OA\Get(path="/book/{id}",
     *     summary="Info about book with given id",
     *     @OA\Response(
     *       response=200,
     *       @OA\JsonContent(ref="#/components/schemas/Book"),
     *       description="Returns Book object of given ID ",
     *     ),
     *     @OA\Response(
     *       response=404,
     *       description="Returns 404 error when book with given ID does not exists",
     *     ),
     * )
     */
}