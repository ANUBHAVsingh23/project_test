<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StartupController;
use App\Http\Controllers\InvestorController;
use App\Http\Controllers\NewsArticleController;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Startups
Route::get('/startups', [StartupController::class, 'index']);
Route::get('/startups/{startup}', [StartupController::class, 'show']);
Route::post('/startups', [StartupController::class, 'store']);
Route::put('/startups/{startup}', [StartupController::class, 'update']);
Route::delete('/startups/{startup}', [StartupController::class, 'destroy']);
Route::get('/startup-list-data', [StartupController::class, 'listData']);
Route::get('/export-startups', [StartupController::class, 'export']); // New route for exporting startups

// Dashboard data
Route::get('/dashboard-data', [StartupController::class, 'dashboardData']);

// Investors
Route::get('/investors', [InvestorController::class, 'index']);
Route::get('/investors/{investor}', [InvestorController::class, 'show']);
Route::post('/investors', [InvestorController::class, 'store']);
Route::put('/investors/{investor}', [InvestorController::class, 'update']);
Route::delete('/investors/{investor}', [InvestorController::class, 'destroy']);
Route::get('/investor-list-data', [InvestorController::class, 'listData']);

// News Articles
Route::get('/news-articles', [NewsArticleController::class, 'index']);
Route::get('/news-articles/{newsArticle}', [NewsArticleController::class, 'show']);
Route::post('/news-articles', [NewsArticleController::class, 'store']);
Route::put('/news-articles/{newsArticle}', [NewsArticleController::class, 'update']);
Route::delete('/news-articles/{newsArticle}', [NewsArticleController::class, 'destroy']);

// External News API data
Route::get('/external-news', [NewsArticleController::class, 'getNewsApiData']);