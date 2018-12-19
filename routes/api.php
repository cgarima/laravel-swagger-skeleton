<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * @OA\OpenApi(
 *     @OA\Info(
 *         version="1.0.0",
 *         title="Swagger Petstore",
 *         @OA\License(name="MIT")
 *     ),
 *     @OA\Server(
 *         description="Api server",
 *         url="petstore.swagger.io",
 *     ),
 * )
 */
/**
 *  @OA\Schema(
 *      schema="Error",
 *      required={"code", "message"},
 *      @OA\Property(
 *          property="code",
 *          type="integer",
 *          format="int32"
 *      ),
 *      @OA\Property(
 *          property="message",
 *          type="string"
 *      )
 *  ),
 *  @OA\Schema(
 *      schema="Pets",
 *      type="array",
 *      @OA\Items(ref="#/components/schemas/Pet")
 *  )
 */

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
