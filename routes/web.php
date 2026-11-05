<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Site\WebController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('site.web');
})->name('home');

// Main Sections
Route::get('/about', function () {
    return view('site.about');
})->name('about');

Route::get('/pricing', function () {
    return view('site.pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('site.contact');
})->name('contact');

Route::get('/policy', function () {
    return view('site.policy');
})->name('policy');

Route::get('/terms', function () {
    return view('site.terms');
})->name('terms');

Route::get('/quotes', function () {
    return view('site.quotes');
})->name('quotes');

Route::post('/cotizacion/enviar', [WebController::class, 'enviar'])->name('cotizacion.enviar');

// Services
Route::prefix('services')->group(function () {

    // Marketing
    Route::prefix('marketing')->group(function () {
        Route::get('/', function () {
            return view('site.services.marketing.marketing');
        })->name('marketing');

        Route::get('/strategy', function () {
            return view('site.services.marketing.strategy');
        })->name('strategy');
    });

    // Websites
    Route::prefix('websites')->group(function () {
        Route::get('/', function () {
            return view('site.services.websites.website');
        })->name('website');

        Route::get('/development', function () {
            return view('site.services.websites.development');
        })->name('development');

        Route::get('/integrations', function () {
            return view('site.services.websites.integrate');
        })->name('integrate');

        Route::get('/implementation', function () {
            return view('site.services.websites.implement');
        })->name('implement');
    });

    // Audiovisual
    Route::prefix('audiovisual')->group(function () {
        Route::get('/photography', function () {
            return view('site.services.audiovisual.photo');
        })->name('photo');

        Route::get('/video', function () {
            return view('site.services.audiovisual.video');
        })->name('video');
    });

    // Design
    Route::prefix('design')->group(function () {
        Route::get('/branding', function () {
            return view('site.services.design.branding');
        })->name('branding');

        Route::get('/pop', function () {
            return view('site.services.design.pop');
        })->name('pop');

        Route::get('/digital-advertising', function () {
            return view('site.services.design.digital');
        })->name('digital');
    });

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
