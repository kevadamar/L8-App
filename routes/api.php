<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// prefix api v1
Route::prefix('v1')->group(function () {
    // list all uom
    Route::get("/uom", function (Request $request) {
        $message = "Success Get UOM";
        $code = 200;
        $data = collect();

        $data->push(['id' => 1, 'value' => 'SHP'], ['id' => 2, 'value' => 'T'], ['id' => 3, 'value' => 'M3']);

        return response()->json([
            'message' => $message,
            'code' => $code,
            'data' => $data->toArray(),
        ], $code);
    });
    // list all currency
    Route::get("/currency", function (Request $request) {
        $message = "Success Get Currency";
        $code = 200;
        $data = collect();

        $data->push(['id' => 1, 'value' => 'USD'], ['id' => 2, 'value' => 'IDR'], ['id' => 3, 'value' => 'SGD']);

        return response()->json([
            'message' => $message,
            'code' => $code,
            'data' => $data->toArray(),
        ], $code);
    });
    // list all Charge To
    Route::get("/charge-cost", function (Request $request) {
        $message = "Success Get Charge Cost";
        $code = 200;
        $data = collect();

        $data->push(['id' => 1, 'value' => 'Warehouse'], ['id' => 2, 'value' => 'Inventory'], ['id' => 3, 'value' => 'Stuffing']);

        return response()->json([
            'message' => $message,
            'code' => $code,
            'data' => $data->toArray(),
        ], $code);
    });
});
