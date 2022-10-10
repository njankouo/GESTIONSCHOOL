<?php

use App\Models\Annee;
use App\Models\Salle;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CongeController;
use App\Http\Controllers\CycleController;
//use App\Htpp\Controllers\ProfileController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\SalleController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\NiveauController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ContratController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\SanctionController;
use App\Http\Controllers\TrimestreController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\Annee_scolaireController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/utilisateurs',[UserController::class,'index'])->name('utilisateurs');
Route::get('/eleve',[EleveController::class,'index'])->name('eleve');
Route::get('/Profile/utilisateurs',[ProfilController::class,'index'])->name('profile');
Route::get('/update/profil',[ProfilController::class,'modification'])->name('update.profile');
Route::get('/salle',[SalleController::class,'index'])->name('salle');
Route::get('/add/eleve',[EleveController::class,'add'])->name('add.eleve');
Route::get('/edit/eleve/{id}',[EleveController::class,'edit'])->name('edit.eleve');
Route::get('/enseignant',[EnseignantController::class,'index'])->name('enseignant');
Route::get('/add/enseignant',[EnseignantController::class,'add'])->name('add.enseignant');
Route::get('/annee/scolaire',[Annee_scolaireController::class,'index'])->name('annee');
Route::get('/groupe',[GroupeController::class,'index'])->name('groupe');
Route::get('/groupe/add/{id}',[GroupeController::class,'edit'])->name('edit.group');
Route::get('/list/matiere',[MatiereController::class,'index'])->name('list.matiere');
Route::get('/add/salle',[SalleController::class,'sav'])->name('add.sall');
Route::get('/niveau/add',[NiveauController::class,'index'])->name('add.niveau');
Route::get('/trimestre/{id}',[TrimestreController::class,'index'])->name('trimestre.add');
Route::get('/sanction',[SanctionController::class,'index'])->name('sanction.index');
Route::get('/add/sanction',[SanctionController::class,'add'])->name('save.sanction');
Route::get('/conges',[CongeController::class,'index'])->name('conge.index');
Route::get('/utilisateur/edit/{id}',[UserController::class,'edit'])->name('edit.user');
Route::get('/conge/',[CongeController::class,'add'])->name('add.conge');
Route::get('/matiere/add',[MatiereController::class,'save'])->name('add.matieres');
Route::get('/add/matiere',[MatiereController::class,'add'])->name('ajout.matiere');
Route::get('notes',[NoteController::class,'index'])->name('note.index');
Route::get('/contrat',[ContratController::class,'index'])->name('contrat.index');
Route::get('/print/pdf',[EleveController::class,'print'])->name('print.eleve');
Route::get('/changeStatus', [Annee_scolaireController::class,'changeStatus'])->name('toggle.find');

Route::post('ajouter/cycle',[SalleController::class,'add'])->name('add.cycle');
Route::post('/save/eleve',[EleveController::class,'save'])->name('save.eleve');
Route::post('/adds/enseignant',[EnseignantController::class,'save'])->name('adds.enseignant');
Route::post('add/annee',[Annee_scolaireController::class,'save'])->name('add.annee');
Route::post('/add/group',[GroupeController::class,'save'])->name('add.groupe');
Route::post('add/mat',[GroupeController::class,'AddMatiere'])->name('add.matiere');
Route::post('niveau',[NiveauController::class,'save'])->name('ajouter.niveaux');
Route::post('/add/salle/sal',[SalleController::class,'adds'])->name('ad.salle');
Route::post('trimestre/ajouter',[TrimestreController::class,'save'])->name('ajouter.trimestre');
Route::post('add/user',[UserController::class,'save'])->name('add.user');
Route::post('/add/sanction',[SanctionController::class,'save'])->name('add.sanction');
Route::post('conge/add',[CongeController::class,'save'])->name('new.conge');
Route::post('send/mail',[MailController::class ,'save'])->name('send.mail');
Route::POST('contrat',[ContratController::class,'save'])->name('save.contrat');
Route::post('Contrat', [ContratController::class, 'update'])->name('update.contrat');
Route::POST('utilisateurs',[UserController::class,'modifier'])->name('users.update');

Route::put('/edit/elev/{eleve}',[EleveController::class,'modifier'])->name('edition.eleve');

Route::put('/utilisateur/ed/{user}',[UserController::class,'updat'])->name('user.upgrade');



Route::delete('salle/{id}',[CycleController::class,'destroy'])->name('delete.cycle');
Route::delete('salle/eleve/{id}',[SalleController::class,'destroy'])->name('delete.classe');
