<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Marketing site
|--------------------------------------------------------------------------
*/

Route::get('/', [PageController::class, 'show'])->defaults('page', 'home')->name('home');

Route::get('/platform',  [PageController::class, 'show'])->defaults('page', 'platform')->name('platform');
Route::get('/solutions', [PageController::class, 'show'])->defaults('page', 'solutions')->name('solutions');
Route::get('/trust',     [PageController::class, 'show'])->defaults('page', 'trust')->name('trust');
Route::get('/founders',  [PageController::class, 'show'])->defaults('page', 'founders')->name('founders');
Route::get('/contact',   [PageController::class, 'show'])->defaults('page', 'contact')->name('contact');

Route::post('/contact',  [ContactController::class, 'submitContact'])->name('contact.submit');
Route::post('/briefing', [ContactController::class, 'submitBriefing'])->name('briefing.submit');

/*
|--------------------------------------------------------------------------
| Legal
|--------------------------------------------------------------------------
*/

Route::prefix('legal')->name('legal.')->group(function () {
    Route::get('/privacy',       [PageController::class, 'show'])->defaults('page', 'legal.privacy')->name('privacy');
    Route::get('/terms',         [PageController::class, 'show'])->defaults('page', 'legal.terms')->name('terms');
    Route::get('/cookies',       [PageController::class, 'show'])->defaults('page', 'legal.cookies')->name('cookies');
    Route::get('/disclaimer',    [PageController::class, 'show'])->defaults('page', 'legal.disclaimer')->name('disclaimer');
    Route::get('/accessibility', [PageController::class, 'show'])->defaults('page', 'legal.accessibility')->name('accessibility');
});

/*
|--------------------------------------------------------------------------
| Redirects from the old flat *.html URLs
|--------------------------------------------------------------------------
*/

$legacy = [
    'index.html'         => 'home',
    'platform.html'      => 'platform',
    'solutions.html'     => 'solutions',
    'trust.html'         => 'trust',
    'founders.html'      => 'founders',
    'contact.html'       => 'contact',
    'privacy.html'       => 'legal.privacy',
    'terms.html'         => 'legal.terms',
    'cookies.html'       => 'legal.cookies',
    'disclaimer.html'    => 'legal.disclaimer',
    'accessibility.html' => 'legal.accessibility',
];

foreach ($legacy as $old => $routeName) {
    Route::get('/'.$old, fn () => redirect()->route($routeName, [], 301));
}
