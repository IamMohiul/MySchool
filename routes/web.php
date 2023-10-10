<?php

use App\Http\Controllers\Admin\AboutschoolController;
use App\Http\Controllers\Admin\AdmresultController;
use App\Http\Controllers\Admin\AdmrulesController;
use App\Http\Controllers\Admin\AdmsyllabusController;
use App\Http\Controllers\Admin\CabinetController;
use App\Http\Controllers\Admin\CalenderController;
use App\Http\Controllers\Admin\ChairmanlistController;
use App\Http\Controllers\Admin\CitizencharterConroller;
use App\Http\Controllers\Admin\class10Controller;
use App\Http\Controllers\Admin\class6Controller;
use App\Http\Controllers\Admin\class7Controller;
use App\Http\Controllers\Admin\class8Controller;
use App\Http\Controllers\Admin\class9Controller;
use App\Http\Controllers\Admin\ClassresultController;
use App\Http\Controllers\Admin\ClsroutineController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CrescentController;
use App\Http\Controllers\Admin\CulturalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DebateController;
use App\Http\Controllers\Admin\DonarslistController;
use App\Http\Controllers\Admin\ExamroutineController;
use App\Http\Controllers\Admin\ExamrulesController;
use App\Http\Controllers\Admin\ExlistController;
use App\Http\Controllers\Admin\FeesController;
use App\Http\Controllers\Admin\genderbController;
use App\Http\Controllers\Admin\HeadintroController;
use App\Http\Controllers\Admin\HistoryController;
use App\Http\Controllers\Admin\HolidayController;
use App\Http\Controllers\Admin\InfrastructureController;
use App\Http\Controllers\Admin\LanguageclubController;
use App\Http\Controllers\Admin\MagazineController;
use App\Http\Controllers\Admin\ManagingcomController;
use App\Http\Controllers\Admin\MessageheadController;
use App\Http\Controllers\Admin\MissionController;
use App\Http\Controllers\Admin\MpoController;
use App\Http\Controllers\Admin\NcatagoryController;
use App\Http\Controllers\Admin\noticeController;
use App\Http\Controllers\Admin\PhotogalController;
use App\Http\Controllers\Admin\PresidentmsgController;
use App\Http\Controllers\Admin\PrinciplelistController;
use App\Http\Controllers\Admin\ProspectsController;
use App\Http\Controllers\Admin\RulesregController;
use App\Http\Controllers\Admin\SciencefairController;
use App\Http\Controllers\Admin\ScoutsController;
use App\Http\Controllers\Admin\sliderController;
use App\Http\Controllers\Admin\SportsController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StudytourController;
use App\Http\Controllers\Admin\SuggestionController;
use App\Http\Controllers\Admin\SyllabasController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeachingController;
use App\Http\Controllers\Admin\UniformController;
use App\Http\Controllers\Admin\VideogalController;
use App\Http\Controllers\Admin\YearlyworkController;
use App\Http\Controllers\Frontend\AboutschoolController as FrontendAboutschoolController;
use App\Http\Controllers\Frontend\CitizenController;
use App\Http\Controllers\Frontend\HeadmessageController;
use App\Http\Controllers\Frontend\HistoryController as FrontendHistoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InfrastructureController as FrontendInfrastructureController;
use App\Http\Controllers\Frontend\layoutController;
use App\Http\Controllers\Frontend\MissionvissionController;
use App\Http\Controllers\Frontend\MpoinfoController;
use App\Http\Controllers\Frontend\NoticeshowController;
use App\Http\Controllers\Frontend\PresidentController;
use App\Http\Controllers\Frontend\TeachingController as FrontendTeachingController;
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

Route::get('/', [HomeController::class, 'index']) -> name('Home');
Route::get('/Notice', [NoticeshowController::class, 'index']) -> name('Notice');
Route::get('/layout', [layoutController::class, 'index']) -> name('Layout');

// About Section

Route::get('/About_school', [FrontendAboutschoolController::class, 'index'])->name('About_School');
Route::get('/Mission_vission', [MissionvissionController::class, 'index'])->name('Mission_vission');
Route::get('/History', [FrontendHistoryController::class, 'index'])->name('History');
Route::get('/Citizen_charter', [CitizenController::class, 'index'])->name('Citizen');
Route::get('/Teaching_permission', [FrontendTeachingController::class, 'index'])->name('Teaching');
Route::get('/Mpo_info', [MpoinfoController::class, 'index']);
Route::get('/Infrastructure', [FrontendInfrastructureController::class, 'index']);
Route::get('/Yearly_working_plan', function () {
    return view('frontend.about.Yearly_working_plan');
});
Route::get('/Head_intro', function () {
    return view('frontend.about.Head_intro');
});
Route::get('/Contact_us', function () {
    return view('frontend.about.Contact_us');
});
// Administrative information

Route::get('/President_Message', [PresidentController::class, 'index']);

Route::get('/Message_head', [HeadmessageController::class, 'index']);

Route::get('/Managing_comittee', function () {
    return view('frontend.administrative.Managing_comittee');
});

Route::get('/Chairman_list', function () {
    return view('frontend.administrative.Chairman_list');
});

Route::get('/Principle_list', function () {
    return view('frontend.administrative.Principle_list');
});

Route::get('/Donars_list', function () {
    return view('frontend.administrative.Donars_list');
});

Route::get('/Ex_member_list', function () {
    return view('frontend.administrative.Ex_member_list');
});

// Teacher & Staff

Route::get('/Teacher_info', function () {
    return view('frontend.teacher.Teacher_info');
});

Route::get('/Staff_info', function () {
    return view('frontend.teacher.Staff_info');
});

// Students

Route::get('/gender_based', function () {
    return view('frontend.students.gender_based');
});

Route::get('/class6', function () {
    return view('frontend.students.class6');
});

Route::get('/class7', function () {
    return view('frontend.students.class7');
});

Route::get('/class8', function () {
    return view('frontend.students.class8');
});

Route::get('/class9', function () {
    return view('frontend.students.class9');
});

Route::get('/class10', function () {
    return view('frontend.students.class10');
});

// Academic

Route::get('/Holiday_list', function () {
    return view('frontend.academic.Holiday_list');
});

Route::get('/Academic_Calender', function () {
    return view('frontend.academic.Academic_Calender');
});

Route::get('/Class_routine', function () {
    return view('frontend.academic.Class_routine');
});

Route::get('/Syllabas', function () {
    return view('frontend.academic.Syllabas');
});

Route::get('/Rules_regulation', function () {
    return view('frontend.academic.Rules_regulation');
});

Route::get('/Uniform', function () {
    return view('frontend.academic.Uniform');
});

Route::get('/Fees', function () {
    return view('frontend.academic.Fees');
});

//Co-curricular

Route::get('/Sports', function () {
    return view('frontend.co-curricular.Sports');
});

Route::get('/Cultural_Activities', function () {
    return view('frontend.co-curricular.Cultural_Activities');
});

Route::get('/Scouts', function () {
    return view('frontend.co-curricular.Scouts');
});

Route::get('/Red_Crescent', function () {
    return view('frontend.co-curricular.Red_Crescent');
});

Route::get('/Study_Tour', function () {
    return view('frontend.co-curricular.Study_Tour');
});

Route::get('/Students_Cabinet', function () {
    return view('frontend.co-curricular.Students_Cabinet');
});

Route::get('/Debate', function () {
    return view('frontend.co-curricular.Debate');
});

Route::get('/Science_Fair', function () {
    return view('frontend.co-curricular.Science_Fair');
});

Route::get('/Language_Club', function () {
    return view('frontend.co-curricular.Language_Club');
});

// Admission

Route::get('/Prospects', function () {
    return view('frontend.admission.Prospects');
});

Route::get('/Admission_Rules', function () {
    return view('frontend.admission.Admission_Rules');
});

Route::get('/Admission_Syllabus', function () {
    return view('frontend.admission.Admission_Syllabus');
});

Route::get('/Admission_Result', function () {
    return view('frontend.admission.Admission_Result');
});

// Exam

Route::get('/Exam_rules', function () {
    return view('frontend.exam.Exam_rules');
});

Route::get('/Exam_routine', function () {
    return view('frontend.exam.Exam_routine');
});

Route::get('/Suggestion', function () {
    return view('frontend.exam.Suggestion');
});

// Result

Route::get('/Class_Result', function () {
    return view('frontend.result.Class_Result');
});

// Gallery

Route::get('/Photo_gallery', function () {
    return view('frontend.gallery.Photo_gallery');
});

Route::get('/Video_gallery', function () {
    return view('frontend.gallery.Video_gallery');
});

Route::get('/Magazine', function () {
    return view('frontend.gallery.Magazine');
});


// Admin Section

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::group (['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'],function(){

    //Header
    Route::resource('slider', sliderController::class);

    //Notice
    Route::resource('Ncatagory', NcatagoryController::class);
    Route::resource('Notice', noticeController::class);


    // About Section
    Route::resource('About_school', AboutschoolController::class);
    Route::resource('Mission_vission', MissionController::class);
    Route::resource('History', HistoryController::class);
    Route::resource('Citizencharter', CitizencharterConroller::class);
    Route::resource('Teaching', TeachingController::class);
    Route::resource('Mpo', MpoController::class);
    Route::resource('Infrastructure', InfrastructureController::class);
    Route::resource('Yearlywork', YearlyworkController::class);

    Route::resource('Headintro', HeadintroController::class);
    Route::resource('Contact', ContactController::class);

    // Administrative information
    Route::resource('Presidentmsg', PresidentmsgController::class);
    Route::resource('Messagehead', MessageheadController::class);
    
    Route::resource('Managingcom', ManagingcomController::class);
    Route::resource('Chairmanlist', ChairmanlistController::class);
    Route::resource('Principlelist', PrinciplelistController::class);
    Route::resource('Donarslist', DonarslistController::class);
    Route::resource('Exlist', ExlistController::class);

    // Teacher & Staff
    Route::resource('Teacher', TeacherController::class);
    Route::resource('Staff', StaffController::class);

    // Students
    Route::resource('genderb', genderbController::class);
    Route::resource('class6', class6Controller::class);
    Route::resource('class7', class7Controller::class);
    Route::resource('class8', class8Controller::class);
    Route::resource('class9', class9Controller::class);
    Route::resource('class10', class10Controller::class);

    // Academic
    Route::resource('Holiday', HolidayController::class);
    Route::resource('Calender', CalenderController::class);
    Route::resource('Clsroutine', ClsroutineController::class);
    Route::resource('Syllabas', SyllabasController::class);
    Route::resource('Rulesreg', RulesregController::class);
    Route::resource('Uniform', UniformController::class);
    Route::resource('Fees', FeesController::class);

    //Co-curricular
    Route::resource('Sports', SportsController::class);
    Route::resource('Cultural', CulturalController::class);
    Route::resource('Scouts', ScoutsController::class);
    Route::resource('Crescent', CrescentController::class);
    Route::resource('Studytour', StudytourController::class);
    Route::resource('Cabinet', CabinetController::class);
    Route::resource('Debate', DebateController::class);
    Route::resource('Sciencefair', SciencefairController::class);
    Route::resource('Languageclub', LanguageclubController::class);

    // Admission
    Route::resource('Prospects', ProspectsController::class);
    Route::resource('Admrules', AdmrulesController::class);
    Route::resource('Admsyllabus', AdmsyllabusController::class);
    Route::resource('Admresult', AdmresultController::class);

    // Exam
    Route::resource('Examrules', ExamrulesController::class);
    Route::resource('Examroutine', ExamroutineController::class);
    Route::resource('Suggestion', SuggestionController::class);

    // Result
    Route::resource('Classresult', ClassresultController::class);

    // Gallery
    Route::resource('Photogal', PhotogalController::class);
    Route::resource('Videogal', VideogalController::class);
    Route::resource('Magazine', MagazineController::class);

    //Notice
    // Route::resource('Contact', ContactController::class);
    // Route::resource('Contact', ContactController::class);
    // Route::resource('Contact', ContactController::class);
    // Route::resource('Contact', ContactController::class);
    // Route::resource('Contact', ContactController::class);
    // Route::resource('Contact', ContactController::class);

});
