<?php

use App\Http\Controllers\AdminEventController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\EventProposalController;
use App\Http\Controllers\AdminHomePageController;
use App\Http\Controllers\AdminAnnouncementController;
use App\Http\Controllers\AdminMemberUpdateController;
use App\Http\Controllers\AdminMemberInfo;
use App\Http\Controllers\AlbumListController;
use App\Http\Controllers\AnnouncementUploadController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'main']);
Route::get('/admin', [AdminController::class, 'admin']);
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::get('/event', [EventController::class, 'event']);
Route::get('/announcement', [AnnouncementController::class, 'announcement']);
// Route::get('/adminevent', [AdminEventController::class, 'adminevent']);
Route::controller(EventController::class)->group(function () {
    Route::get('/event', 'event')->name('event.get');
    Route::post('/event', 'store')->name('event.store');
});

Route::controller(AdminEventController::class)->group(function () {
    Route::get('/adminevent', 'adminevent')->name('adminevent.get');
    Route::post('/adminevent', 'store')->name('adminevent.store');
});

// Route::post('/submit-proposal', [EventProposalController::class, 'eventproposal'])->name('submit-proposal');
Route::get('/eventproposal', [EventProposalController::class, 'eventproposal'])->name('eventproposal');
Route::post('/eventproposal', [EventProposalController::class, 'addProposal'])->name('addProposal');


//admineventproposal
Route::get('/admineventproposal', [EventProposalController::class, 'admineventproposal'])->name('admineventproposal');;
Route::get('/admineventproposal', [EventProposalController::class, 'showProposal'])->name('showProposal');
Route::delete('/admineventproposal/{proposal}/delete', [EventProposalController::class, 'deleteProposal'])->name('deleteProposal');







Route::get('/adminhomepage', [AdminHomePageController::class, 'adminhomepage']);
Route::get('/adminannouncement', [AdminAnnouncementController::class, 'adminannouncement']);
Route::get('/adminmemberupdate', [AdminMemberUpdateController::class, 'adminmemberupdate']);
Route::get('/adminmemberinfo', [AdminMemberInfo::class, 'adminmemberinfo']);


//crud
Route::get('/album/{album}', [AlbumListController::class, 'showAlbum'])->name('showAlbum');
Route::get('/adminhomepage', [AlbumListController::class, 'index'])->name('adminhomepage');
Route::get('/album_list', [AlbumListController::class, 'index'])->name('index');
Route::get('/add', [AlbumListController::class, 'add'])->name('add');
Route::post('/add', [AlbumListController::class, 'addAlbum'])->name('addAlbum');
Route::get('/album/{album}/update', [AlbumListController::class, 'update'])->name('update');
Route::put('/album/{album}/edit', [AlbumListController::class, 'updateAlbum'])->name('updateAlbum');
Route::delete('/album/{album}/delete', [AlbumListController::class, 'deleteAlbum'])->name('deleteAlbum');

//announcement
// Route::controller(AdminAnnouncementController::class)->group(function () {
//     Route::get('/adminannouncement', 'adminannouncement')->name('adminannouncement.get');
//     Route::post('/adminannouncement', 'store')->name('adminannouncement.store');
// });

Route::delete('/announcement/{announcement}/delete', [AdminAnnouncementController::class, 'deleteAnnouncement'])->name('deleteAnnouncement');
Route::post('/adminannouncement', [AdminAnnouncementController::class, 'addadminannouncement'])->name('addadminannouncement');
Route::get('/announcementupload', [AnnouncementUploadController::class, 'announcementupload'])->name('announcementupload');
Route::get('/adminannouncement', [AdminAnnouncementController::class, 'adminannouncement'])->name('adminannouncement');
//download
// Route::get('/download/{file}', [DownloadController::class, 'download'])->name('download');
Route::get('/download/{file}', [DownloadController::class, 'download']);
Route::get('/upload', [DownloadController::class, 'showForm'])->name('upload');
Route::post('/upload', [DownloadController::class, 'uploadFile'])->name('upload');
Route::get('/download-announcement/{announcement}', 'AnnouncementController@download')->name('downloadAnnouncement');


//search
// In your web.php routes file
Route::get('/search', [SearchController::class, 'search'])->name('search');
Route::get('/admin', [AdminController::class, 'admin']);
// Route::get('/adminhomepage', [AdminHomePageController::class, 'adminhomepage']);
//



// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/adminhomepage', function () {
//     return view('pages.index');
// })->middleware(['auth', 'verified'])->name('adminhomepage');
//otenthication
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/adminhomepage', [AlbumListController::class, 'index'])->name('adminhomepage');
});

require __DIR__ . '/auth.php';
