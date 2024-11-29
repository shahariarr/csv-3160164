<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/import-cohort', [CohortController::class, 'importCsv']);
// Route::get('/cohorts', [CohortController::class, 'showCohorts']);

use App\Http\Controllers\CohortController;

Route::get('/', [CohortController::class, 'importCsv']);
Route::get('/cohorts', [CohortController::class, 'showCohorts']);
