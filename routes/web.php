<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\TestimonialController;
use App\Http\Controllers\Admin\MetaDataController;
use App\Http\Controllers\Admin\InquiryController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\frontController;
use App\Http\Controllers\Admin\AppointmentController;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::fallback(function () {
//     return response()->view('errors.404', [], 404);
// });


Route::get('/login', function () {
    return redirect()->route('login');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Profile Routes
Route::prefix('profile')->name('profile.')->middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'getProfile'])->name('detail');
    Route::get('/edit', [HomeController::class, 'EditProfile'])->name('EditProfile');
    Route::post('/update', [HomeController::class, 'updateProfile'])->name('update');
    Route::post('/change-password', [HomeController::class, 'changePassword'])->name('change-password');
});

Route::get('logout', [LoginController::class, 'logout'])->name('logout');



//Gallery
Route::prefix('admin')->name('gallery.')->middleware('auth')->group(function () {
    Route::get('/gallery/index', [GalleryController::class, 'index'])->name('index');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('store');
    Route::get('/gallery/edit/{id?}', [GalleryController::class, 'editview'])->name('edit');
    Route::post('/gallery/update', [GalleryController::class, 'update'])->name('update');
    Route::delete('/gallery/delete', [GalleryController::class, 'delete'])->name('delete');
});

//Video
Route::prefix('admin')->name('video.')->middleware('auth')->group(function () {
    Route::get('/video/index', [VideoController::class, 'index'])->name('index');
    Route::post('/video/store', [VideoController::class, 'store'])->name('store');
    Route::get('/video/edit/{id?}', [VideoController::class, 'editview'])->name('edit');
    Route::post('/video/update', [VideoController::class, 'update'])->name('update');
    Route::delete('/video/delete', [VideoController::class, 'delete'])->name('delete');
});

//Testimonial Master
Route::prefix('admin')->name('testimonial.')->middleware('auth')->group(function () {
    Route::get('/testimonial/index', [TestimonialController::class, 'index'])->name('index');
    Route::post('/testimonial/store', [TestimonialController::class, 'create'])->name('store');
    Route::get('/testimonial/edit/{id?}', [TestimonialController::class, 'editview'])->name('edit');
    Route::post('/testimonial/update', [TestimonialController::class, 'update'])->name('update');
    Route::delete('/testimonial/delete', [TestimonialController::class, 'delete'])->name('delete');
});

//Faq Master
Route::prefix('admin')->name('faq.')->middleware('auth')->group(function () {
    Route::get('/faq/index', [FaqController::class, 'index'])->name('index');
    Route::post('/faq/store', [FaqController::class, 'create'])->name('store');
    Route::get('/faq/edit/{id?}', [FaqController::class, 'editview'])->name('edit');
    Route::post('/faq/update', [FaqController::class, 'update'])->name('update');
    Route::delete('/faq/delete', [FaqController::class, 'delete'])->name('delete');
});


//appointment route master
Route::prefix('admin')->name('appointment.')->middleware('auth')->group(function () {
    Route::get('/appointments/index', [AppointmentController::class, 'index'])->name('index');
    Route::delete('/appointments/delete', [AppointmentController::class, 'destroy'])->name('delete');
Route::post('/appointments/status', [AppointmentController::class, 'updateStatus'])->name('status');
});

 //Blog route master
 Route::prefix('admin')->name('Blog.')->middleware('auth')->group(function () {   
    Route::get('/Blog/index', [BlogController::class, 'index'])->name('index');
Route::get('/Blog/create', [BlogController::class, 'createview'])->name('create');
    Route::post('/Blog/add', [BlogController::class, 'create'])->name('add');
    Route::get('/Blog/edit/{id?}', [BlogController::class, 'editview'])->name('edit');
    Route::post('/Blog/update', [BlogController::class, 'update'])->name('update');
    Route::post('/Blog/status/{id?}', [BlogController::class, 'status'])->name('status');  
    Route::delete('/Blog/delete', [BlogController::class, 'delete'])->name('delete');
    Route::get('/Blog/indexuser', [BlogController::class, 'indexuser'])->name('indexuser');

});

//meta data
Route::prefix('admin')->name('metaData.')->middleware('auth')->group(function () {
    Route::get('/seo/index', [MetaDataController::class, 'index'])->name('index');
    Route::get('seo/{id}/edit', [MetaDataController::class, 'edit'])->name('edit');
    Route::put('seo/{id}', [MetaDataController::class, 'update'])->name('update');
    Route::get('/seo/view/{id?}', [MetaDataController::class, 'view'])->name('view');
});

//inquiry
Route::prefix('admin')->name('Inquiry.')->middleware('auth')->group(function () {
    Route::get('Inquiry/index', [InquiryController::class, 'index'])->name('index');
    Route::delete('/Inquiry-delete', [InquiryController::class, 'delete'])->name('delete');
    Route::get('Inquiry/view/detail/{id?}', [InquiryController::class, 'viewdetail'])->name('viewdetail');
  Route::get('Inquiry/exportCancelReport', [InquiryController::class,'ExportInquiry'])->name('ExportInquiry');
});



/*----------------------------front route-------------------------------------------*/

Route::get('/', [frontController::class, 'index'])->name('FrontIndex');
// Route::get('/about-Dr-gursimrut', [frontController::class, 'aboutgursimrut'])->name('FrontAboutgursimrut');
Route::get('/about-us', [frontController::class, 'aboutus'])->name('FrontAboutus');
Route::get('/contact-us', [frontController::class, 'contact'])->name('FrontContact');
Route::get('/refresh_captcha', [frontController::class, 'reloadCaptcha'])->name('refresh.captcha');
Route::post('/contact-submit', [FrontController::class, 'contactsubmit'])->name('FrontviewContactsubmit');
Route::get('/thankyou', [frontController::class, 'thankyou'])->name('FrontThankyou');
Route::get('/photogallery', [frontController::class, 'photogallery'])->name('FrontPhotogallery');
Route::get('/videogallery', [frontController::class, 'videogallery'])->name('FrontVideogallery');
Route::get('/blogs', [frontController::class, 'blog'])->name('FrontBlog');
Route::get('/blog-details/{slug}', [FrontController::class, 'blogDetail'])->name('frontBlogdetail');
Route::post('/appointment-store', [frontController::class, 'storeAppointment'])->name('appointment.store');




Route::get('/pediatric-services', [frontController::class, 'pediatricservices'])->name('FrontPediatricservices');
Route::get('/ortho-services', [frontController::class, 'orthoservices'])->name('FrontOrthoservices');

Route::get('/acl-reconstruction', [frontController::class, 'aclreconstruction'])->name('FrontAclreconstruction');
Route::get('/pcl-reconstruction', [frontController::class, 'pclreconstruction'])->name('FrontPclreconstruction');
Route::get('/cartilage-surgery', [frontController::class, 'cartilagesurgery'])->name('FrontCartilagesurgery');
Route::get('/bankart-repair', [frontController::class, 'bankartrepair'])->name('FrontBankartrepair');
Route::get('/knee-replacement', [frontController::class, 'kneereplacement'])->name('FrontKneereplacement');
Route::get('/hip-replacement', [frontController::class, 'hipreplacement'])->name('FrontHipreplacement');
Route::get('/arthroscopy-surgery', [frontController::class, 'arthroscopysurgery'])->name('FrontArthroscopysurgery');
Route::get('/trauma-surgery', [frontController::class, 'traumasurgery'])->name('FrontTraumasurgery');
Route::get('/shoulder-rotator-cuff-repair', [frontController::class, 'shoulderrotatorcuffrepair'])->name('FrontShoulderrotatorcuffrepair');
Route::get('/newborn-care', [frontController::class, 'newborncare'])->name('FrontNewborncare');
Route::get('/well-baby-visits', [frontController::class, 'wellbabyvisits'])->name('FrontWellbabyvisits');
Route::get('/child-growth', [frontController::class, 'childgrowth'])->name('FrontChildgrowth');
Route::get('/vaccination', [frontController::class, 'vaccination'])->name('FrontVaccination');
Route::get('/nutrition', [frontController::class, 'nutrition'])->name('FrontNutrition');
Route::get('/school-physical', [frontController::class, 'schoolphysical'])->name('FrontSchoolphysical');
Route::get('/adolescent-health', [frontController::class, 'adolescenthealth'])->name('FrontAdolescenthealth');



Route::get('/service/{id}', [frontController::class, 'serviceDetail'])->name('FrontServiceWork');
Route::get('/service-detail/{id}', [FrontController::class, 'ServicesDetail'])->name('FrontServiceWork');



Route::prefix('admin')->group(function () {
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);

    Route::get('services/{service}/faqs', [App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin.services.faqs.index');
    Route::get('services/{service}/faqs/create', [App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin.services.faqs.create');
    Route::post('services/{service}/faqs', [App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin.services.faqs.store');
    Route::get('faqs/{faq}/edit', [App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin.services.faqs.edit');
    Route::put('faqs/{faq}', [App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin.services.faqs.update');
    Route::delete('faqs/{faq}', [App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin.services.faqs.destroy');
});





// Route::get('/aesthetic-services', [frontController::class, 'aestheticservices'])->name('FrontAestheticservices');
// Route::get('/eye-treatments', [frontController::class, 'eyetreatments'])->name('FrontEyetreatments');
// Route::get('/photogallery', [frontController::class, 'photogallery'])->name('FrontPhotogallery');
// Route::get('/photo_gallery', [frontController::class, 'photogallery2'])->name('FrontPhotogallery2');

// Route::get('/videogallery', [frontController::class, 'videogallery'])->name('FrontVideogallery');
// Route::get('/video_gallery', [frontController::class, 'videogallery2'])->name('FrontVideogallery2');


// Route::get('/cataract', [frontController::class, 'cataract'])->name('FrontCataract');
// Route::get('/cornea', [frontController::class, 'cornea'])->name('FrontCornea');
// Route::post('/sendMail', [frontController::class, 'sendMail'])->name('sendMail');



