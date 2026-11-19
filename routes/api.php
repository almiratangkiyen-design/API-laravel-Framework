<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// TEMPORARY: Delete after testing ApiResponses trait.
Route::get('/ping', function () {
    return (new class {
        use \App\Traits\ApiResponses;

        public function run()
        {
            return $this->ok('API is working');
        }
    })->run();
});
