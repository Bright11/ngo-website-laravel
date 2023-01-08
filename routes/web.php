<?php

use App\Http\Controllers\admin\adminpageController;
use App\Http\Controllers\admin\DeleteController;
use App\Http\Controllers\admin\InsertdataController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\frontend\pagesController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\register\loginController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Translation\MessageCatalogue;

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
//frontend
Route::get("/", [pagesController::class, "index"])->name('index');
Route::get("/about_us", [pagesController::class, "about_us"])->name('about');
Route::get("/contact_us", [pagesController::class, "contact_us"])->name('contact');
Route::get("/details/{id}", [pagesController::class, 'details'])->name('details');
Route::get("/viewevent/{id}", [pagesController::class, 'viewevent'])->name("viewevent");
Route::get('ourblog', [pagesController::class, 'ourblog'])->name('ourblog');
Route::get('blogdetails/{id}', [pagesController::class, 'blogdetails'])->name('blogdetails');
Route::get('getblogcat/{id}', [pagesController::class, 'getblogcat'])->name('getblogcat');
Route::get('ourgallery', [pagesController::class, 'ourgallery'])->name('ourgallery');
Route::get('donation',[pagesController::class, 'donation'])->name('donation');
Route::get('event_videos',[pagesController::class, 'event_videos'])->name('event_videos');



//admin
//message
Route::post('/sendmessage', [MessageController::class, 'sendmessage'])->name('sendmessage');
//
Route::get("addvent", [adminpageController::class, "addvent"])->name("addvent");
Route::get("admin_aboutus", [adminpageController::class, "admin_aboutus"])->name("admin_aboutus");
Route::get('/abouusform', [adminpageController::class, 'abouusform'])->name('abouusform');
Route::get('blogtable', [adminpageController::class, 'blogtable'])->name('blogtable');

Route::get("dashboard", [adminpageController::class, "dashboard"])->name("dashboard");
Route::get("sponsors", [adminpageController::class, "sponsors"])->name("sponsors");
Route::get("addeventform", [adminpageController::class, 'addeventform'])->name("addeventform");
Route::get('blogform', [adminpageController::class, 'blogform'])->name('blogform');
Route::get("addsponsorform", [adminpageController::class, 'addsponsorform'])->name("addsponsorform");
Route::get("ourcauses", [adminpageController::class, "ourcauses"])->name("ourcauses");
Route::get("ourcausesform", [adminpageController::class, 'ourcausesform'])->name("ourcausesform");
Route::get('blogcategorytable', [adminpageController::class, 'blogcategorytable'])->name('blogcategorytable');
Route::get('blogcategory', [adminpageController::class, 'blogcategory'])->name('blogcategory');
Route::get('admingallery', [adminpageController::class, 'admingallery'])->name('admingallery');
Route::get('galleryform', [adminpageController::class, 'galleryform'])->name('galleryform');
Route::get('seosettings',[adminpageController::class, 'seosettings'])->name('seosettings');
Route::get('admin_videos',[adminpageController::class, 'admin_videos'])->name('admin_videos');
Route::get('admin_video_add',[adminpageController::class, 'admin_video_add'])->name('admin_video_add');

//insert
Route::post("addsponsordb", [InsertdataController::class, "addsponsordb"])->name("addsponsordb");
Route::post("addeventtodb", [InsertdataController::class, "addeventtodb"])->name("addeventtodb");
Route::post("ourcausettodb", [InsertdataController::class, "ourcausettodb"])->name("ourcausettodb");
Route::post('aboutustodb', [InsertdataController::class, "aboutustodb"])->name('aboutustodb');
Route::post('addcategorytodb', [InsertdataController::class, 'addcategorytodb'])->name('addcategorytodb');
Route::post('insertblog', [InsertdataController::class, 'insertblog'])->name('insertblog');
Route::post('insertgallery', [InsertdataController::class, 'insertgallery'])->name('insertgallery');
Route::post('insertvideo',[InsertdataController::class, 'insertvideo'])->name('insertvideo');


Route::get("deletcompany/{id}", [DeleteController::class, "deletcompany"])->name("deletcompany");
Route::get('deleteevnt/{id}', [DeleteController::class, 'deleteevnt'])->name('deleteevnt');
Route::get('deletcause/{id}', [DeleteController::class, 'deletcause'])->name('deletcause');
Route::get('deletabout/{id}', [DeleteController::class, 'deletabout'])->name('deletabout');
Route::get('deletblog/{id}',[DeleteController::class, "deletblog"])->name('deletblog');
Route::get('deletgallery/{id}',[DeleteController::class, 'deletgallery'])->name('deletgallery');
Route::get('deletev/{id}',[DeleteController::class, 'deletev'])->name('deletev');


//edit
Route::get('editabout/{id}', [EditController::class, 'editabout'])->name('editabout');
Route::put('inserteditaboutu/{id}', [EditController::class, 'inserteditaboutu'])->name('inserteditaboutu');
Route::get('editcat/{id}',[EditController::class,'editcat'])->name('editcat');
Route::put('inserteditcat/{id}',[EditController::class, 'inserteditcat'])->name('inserteditcat');

//payment
//Route::get('thankyou', [PaymentController::class, 'thankyou'])->name('thankyou');
Route::get('sucessdonate/{donatehelp}', [PaymentController::class, 'sucessdonate'])->name('sucessdonate');
//Route::get('sucessdonate/{donatehelp}',[PaymentController::class,'sucessdonate'])->name('sucessdonate');
//

//register
Route::get('nlrfregister', [loginController::class, 'nlrfregister'])->name('nlrfregister');
Route::post('insertregisterngo', [loginController::class, 'insertregisterngo'])->name('insertregisterngo');
Route::get('nlrflogin', [loginController::class, 'nlrflogin'])->name('nlrflogin');
Route::post('insertlogin', [loginController::class, 'insertlogin'])->name('insertlogin');
Route::get("confirmadmin",[loginController::class, 'confirmadmin'])->name('confirmadmin');

//Route::post('checkadmin',[loginController::class, 'checkadmin'])->name('checkadmin');

Route::get('logout',[loginController::class, 'logout'])->name('logout');
