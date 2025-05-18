<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Salle;

class EvenementController extends Controller
{
public function mariage()
{
    $salles = Salle::where('type', 'Mariage')->get();
    return view('evenements.mariage', compact('salles'));
}


}
