<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return to_route('comics.index');
});

/* Route::get('/comics/{id}', function ($id) {
    $comics = config('db.comics');
    $comic= null;
    $linksComics = config('db.linksComics');
    $linksDc = config('db.linksDc');
    $linksSites = config('db.linksSites');
    $linksShop = config('db.linksShop');
    foreach ($comics as $item) {
        if ($item['id'] == $id) {
            $comic = $item;
        }
    }
        if ($comic) {
            return view('/comics.show', compact('comic', 'linksComics', 'linksDc', 'linksSites', 'linksShop'));
        } else {
            abort(404);
        }
    
}
)->name('comics.show'); */

Route::resource('comics', ComicController::class);
