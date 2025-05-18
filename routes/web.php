<?php
use Illuminate\Support\Facades\File;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VenueController;

Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');



Route::view('/evenement/mariage', 'evenements.mariage')->name('evenement.mariage');
Route::view('/evenement/anniversaire', 'evenements.anniversaire')->name('evenement.anniversaire');
Route::view('/evenement/entreprise', 'evenements.entreprise')->name('evenement.entreprise');
Route::view('/evenement/reunion', 'evenements.reunion')->name('evenement.reunion');




Route::get('/', function () {
    return view('welcome');
});



use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
use App\Http\Controllers\ServiceController;

Route::get('/services', [ServiceController::class, 'index'])->name('services');
use App\Http\Controllers\PrestataireController;

Route::get('/prestataires', [PrestataireController::class, 'index'])->name('prestataires');




use App\Models\Service;
use App\Models\ReviewSite;

Route::get('/', function () {
    $services = Service::all();
    $reviews = ReviewSite::all();
    return view('welcome', compact('services', 'reviews'));
})->name('home');


Route::get('/contact', function () {
   return view('emails.contact');

})->name('contact');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/prestataires', function () {
    return view('prestataires');
})->name('prestataires');

Route::get('/reservation', function () {
    return view('reservation');
})->name('reservation');

// Route for Terms of Use
Route::get('/terms', function () {
    return view('terms');
})->name('terms');

// Route for Privacy Policy
Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('/slideshow', function () {
    return view('slideshow');
});


use Illuminate\Http\Request;
use App\Models\Salle;

Route::get('/services/{type}', function ($type, Request $request) {
    $query = Salle::where('type', $type);

    if ($request->has('ville') && !empty($request->ville)) {
        $query->where('ville', $request->ville);
    }

    $salles = $query->get();

    return view('services.' . strtolower($type), compact('salles'));
})->name('services.type');



require __DIR__.'/auth.php';




Route::get('/add-salle-test', function () {
    \App\Models\Salle::create([
        'nom' => 'Salle Royale',
        'image' => 'royale.jpg',
        'type' => 'mariage',
        'ville' => 'Rabat',
        'capacite' => 300,
        'adresse' => 'Hay Ryad',
        'prix' => 12000,
    ]);

    return 'Salle ajoutée !';
});
use App\Http\Controllers\ReservationController;

Route::middleware('auth')->group(function () {
    // عرض فورم الحجز الجديد
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');

    // معالجة فورم الحجز الجديد
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');

    // عرض قائمة الحجوزات
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');

    // عرض تفاصيل حجز معين
    Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');

    // إلغاء الحجز
    Route::post('/reservations/{id}/cancel', [ReservationController::class, 'cancel'])->name('reservations.cancel');
});




Route::get('/services/{type}', [ServiceController::class, 'showByType'])->name('services.type');















Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Auth::routes();

Route::get('/salles', [VenueController::class, 'index'])->name('venues.index');
Route::get('/salles/{id}', [VenueController::class, 'show'])->name('venues.show');
Route::get('/salles/{id}/availability', [VenueController::class, 'getAvailability'])->name('venues.availability');


