<?php
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VenueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PrestataireController;
use App\Http\Controllers\ReservationController;
use App\Models\Service;
use App\Models\ReviewSite;
use App\Models\Salle;

// Route d'accueil
Route::get('/', function () {
    $services = Service::all();
    $reviews = ReviewSite::all();
    return view('welcome', compact('services', 'reviews'));
})->name('home');

// Routes pour le formulaire de contact
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.submit');

// Routes des événements
Route::view('/evenement/mariage', 'evenements.mariage')->name('evenement.mariage');
Route::view('/evenement/anniversaire', 'evenements.anniversaire')->name('evenement.anniversaire');
Route::view('/evenement/entreprise', 'evenements.entreprise')->name('evenement.entreprise');
Route::view('/evenement/reunion', 'evenements.reunion')->name('evenement.reunion');

// Routes des services
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/services/{type}', [ServiceController::class, 'showByType'])->name('services.type');
Route::get('/services/ville/{ville}', [ServiceController::class, 'showByVille'])->name('services.ville');
Route::get('/services/categorie/{categorie}', [ServiceController::class, 'showByCategorie'])->name('services.categorie');

// Routes des prestataires
Route::prefix('prestataires')->group(function () {
    Route::get('/', [PrestataireController::class, 'index'])->name('prestataires.index');
    Route::get('/traiteurs', [PrestataireController::class, 'traiteurs'])->name('prestataires.traiteurs');
    Route::get('/decorateurs', [PrestataireController::class, 'decorateurs'])->name('prestataires.decorateurs');
    Route::get('/photographes', [PrestataireController::class, 'photographes'])->name('prestataires.photographes');
    Route::get('/animateurs', [PrestataireController::class, 'animateurs'])->name('prestataires.animateurs');
});

// Routes des salles
Route::get('/salles', [VenueController::class, 'index'])->name('venues.index');
Route::get('/salles/{id}', [VenueController::class, 'show'])->name('venues.show');
Route::get('/salles/{id}/availability', [VenueController::class, 'getAvailability'])->name('venues.availability');

// Routes légales
Route::view('/terms', 'terms')->name('terms');
Route::view('/privacy', 'privacy')->name('privacy');

// Routes authentifiées
Route::middleware(['auth', 'verified'])->group(function () {
    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Réservations
    Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');
    Route::get('/reservations/create', [ReservationController::class, 'create'])->name('reservations.create');
    Route::post('/reservations', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations/{reservation}', [ReservationController::class, 'show'])->name('reservations.show');
    Route::post('/reservations/{reservation}/cancel', [ReservationController::class, 'cancel'])->name('reservations.cancel');
});

require __DIR__.'/auth.php';



