<?php

use App\Http\Controllers\Admin\AboutschoolController;
use App\Http\Controllers\Admin\AdmresultController;
use App\Http\Controllers\Admin\AdmrulesController;
use App\Http\Controllers\Admin\AdmsyllabusController;
use App\Http\Controllers\Admin\AssheadintroController;
use App\Http\Controllers\Admin\CabinetController;
use App\Http\Controllers\Admin\CalenderController;
use App\Http\Controllers\Admin\ChairmanlistController;
use App\Http\Controllers\Admin\CitizencharterConroller;
use App\Http\Controllers\Admin\classmakeController;
use App\Http\Controllers\Admin\ClassresultController;
use App\Http\Controllers\Admin\ClsroutineController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CrescentController;
use App\Http\Controllers\Admin\CulturalController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DebateController;
use App\Http\Controllers\Admin\DescriptionController;
use App\Http\Controllers\Admin\DonarslistController;
use App\Http\Controllers\Admin\ExamroutineController;
use App\Http\Controllers\Admin\ExamrulesController;
use App\Http\Controllers\Admin\ExlistController;
use App\Http\Controllers\Admin\FeesController;
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
use App\Http\Controllers\Admin\sectionmakeController;
use App\Http\Controllers\Admin\sliderController;
use App\Http\Controllers\Admin\SportsController;
use App\Http\Controllers\Admin\StaffController;
use App\Http\Controllers\Admin\StudentsController;
use App\Http\Controllers\Admin\StudytourController;
use App\Http\Controllers\Admin\SuggestionController;
use App\Http\Controllers\Admin\SyllabasController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\Admin\TeachingController;
use App\Http\Controllers\Admin\UniformController;
use App\Http\Controllers\Admin\VideogalController;
use App\Http\Controllers\Admin\YearlyworkController;
use App\Http\Controllers\Frontend\AboutschoolController as FrontendAboutschoolController;
use App\Http\Controllers\Frontend\AcalenderController;
use App\Http\Controllers\Frontend\AdmissionresultController;
use App\Http\Controllers\Frontend\AdmissionrulesController;
use App\Http\Controllers\Frontend\AdmissionsyllabusController;
use App\Http\Controllers\Frontend\ChairmansController;
use App\Http\Controllers\Frontend\CitizenController;
use App\Http\Controllers\Frontend\classmenuController;
use App\Http\Controllers\Frontend\ClassresultController as FrontendClassresultController;
use App\Http\Controllers\Frontend\ClassroutineController;
use App\Http\Controllers\Frontend\ContactController as FrontendContactController;
use App\Http\Controllers\Frontend\CultureController;
use App\Http\Controllers\Frontend\DebateController as FrontendDebateController;
use App\Http\Controllers\Frontend\DonarsController;
use App\Http\Controllers\Frontend\ExamroutineController as FrontendExamroutineController;
use App\Http\Controllers\Frontend\ExamrulesController as FrontendExamrulesController;
use App\Http\Controllers\Frontend\ExmemberController;
use App\Http\Controllers\Frontend\FeesController as FrontendFeesController;
use App\Http\Controllers\Frontend\Headinfo;
use App\Http\Controllers\Frontend\HeadinfoController;
use App\Http\Controllers\Frontend\HeadmessageController;
use App\Http\Controllers\Frontend\HistoryController as FrontendHistoryController;
use App\Http\Controllers\Frontend\HolidaylistController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InfrastructureController as FrontendInfrastructureController;
use App\Http\Controllers\Frontend\LanguageController;
use App\Http\Controllers\Frontend\layoutController;
use App\Http\Controllers\Frontend\ManagingController;
use App\Http\Controllers\Frontend\MissionvissionController;
use App\Http\Controllers\Frontend\MpoinfoController;
use App\Http\Controllers\Frontend\NoticeshowController;
use App\Http\Controllers\Frontend\PDFViewController;
use App\Http\Controllers\Frontend\PhotogallaryController;
use App\Http\Controllers\Frontend\PresidentController;
use App\Http\Controllers\Frontend\PrincipleController;
use App\Http\Controllers\Frontend\ProspectsController as FrontendProspectsController;
use App\Http\Controllers\Frontend\RcrescentController;
use App\Http\Controllers\Frontend\RulesController;
use App\Http\Controllers\Frontend\ScienceController;
use App\Http\Controllers\Frontend\ScoutsController as FrontendScoutsController;
use App\Http\Controllers\Frontend\SportsController as FrontendSportsController;
use App\Http\Controllers\Frontend\StudentscabinetController;
use App\Http\Controllers\Frontend\studentshowController;
use App\Http\Controllers\Frontend\StudytourController as FrontendStudytourController;
use App\Http\Controllers\Frontend\StuffsController;
use App\Http\Controllers\Frontend\SuggestionController as FrontendSuggestionController;
use App\Http\Controllers\Frontend\SyllabasController as FrontendSyllabasController;
use App\Http\Controllers\Frontend\TeachersController;
use App\Http\Controllers\Frontend\TeachingController as FrontendTeachingController;
use App\Http\Controllers\Frontend\UniformController as FrontendUniformController;
use App\Http\Controllers\Frontend\workingplanController;
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
Route::get('Notice/{category_id}', [NoticeshowController::class, 'showNoticesByCategory'])->name('Notice.by.category');

Route::get('/view-pdf/{filename}', [PDFViewController::class, 'show'])->name('pdf.view');



// About Section
Route::get('/About_school', [FrontendAboutschoolController::class, 'index'])->name('About_School');
Route::get('/Mission_vission', [MissionvissionController::class, 'index'])->name('Mission_vission');
Route::get('/History', [FrontendHistoryController::class, 'index'])->name('History');
Route::get('/Citizen_charter', [CitizenController::class, 'index'])->name('Citizen');
Route::get('/Teaching_permission', [FrontendTeachingController::class, 'index'])->name('Teaching');
Route::get('/Mpo_info', [MpoinfoController::class, 'index']);
Route::get('/Infrastructure', [FrontendInfrastructureController::class, 'index']);
Route::get('/Yearly_working_plan',[workingplanController::class, 'index'])->name('Yearly_working_plan');
Route::get('/Head_intro', [HeadinfoController::class, 'index']);
Route::get('/Contact_us', [FrontendContactController::class, 'index']);

// Administrative information
Route::get('/President_Message', [PresidentController::class, 'index']);
Route::get('/Message_head', [HeadmessageController::class, 'index']);
Route::get('/Managing_comittee', [ManagingController::class, 'index']);
Route::get('/Chairman_list', [ChairmansController::class, 'index']);
Route::get('/Principle_list', [PrincipleController::class, 'index']);
Route::get('/Donars_list', [DonarsController::class, 'index']);
Route::get('/Ex_member_list',[ExmemberController::class, 'index']);

// Teacher & Staff
Route::get('/Teacher_info', [TeachersController::class, 'index']);
Route::get('/Staff_info', [StuffsController::class, 'index']);

// Students
Route::get('/navbar', [classmenuController::class, 'index'])->name('navbar');
Route::get('/students', [studentshowController::class, 'index'])->name('students');
Route::get('/students/{category_id}', [studentshowController::class, 'showStudents']);

// Academic
Route::get('/Holiday_list', [HolidaylistController::class, 'index']);
Route::get('/Academic_Calender',[AcalenderController::class, 'index']);
Route::get('/Class_routine', [ClassroutineController::class, 'index']);
Route::get('/Syllabas', [FrontendSyllabasController::class, 'index']);
Route::get('/Rules_regulation',[RulesController::class,'index']);
Route::get('/Uniform', [FrontendUniformController::class,'index']);
Route::get('/Fees', [FrontendFeesController::class, 'index']);

//Co-curricular
Route::get('/Sports',[FrontendSportsController::class, 'index']);
Route::get('/Cultural_Activities', [CultureController::class, 'index']);
Route::get('/Scouts',[FrontendScoutsController::class, 'index']);
Route::get('/Red_Crescent', [RcrescentController::class, 'index']);
Route::get('/Study_Tour', [FrontendStudytourController::class, 'index']);
Route::get('/Students_Cabinet', [StudentscabinetController::class, 'index']);
Route::get('/Debate', [FrontendDebateController::class, 'index']);
Route::get('/Science_Fair', [ScienceController::class, 'index']);
Route::get('/Language_Club', [LanguageController::class, 'index']);

// Admission
Route::get('/Prospects', [FrontendProspectsController::class,'index']);
Route::get('/Admission_Rules',[AdmissionrulesController::class, 'index']);
Route::get('/Admission_Syllabus', [AdmissionsyllabusController::class, 'index']);
Route::get('/Admission_Result', [AdmissionresultController::class, 'index']);

// Exam
Route::get('/Exam_rules', [FrontendExamrulesController::class,'index']);
Route::get('/Exam_routine', [FrontendExamroutineController::class, 'index']);
Route::get('/Suggestion', [FrontendSuggestionController::class,'index']);

// Result
Route::get('/Class_Result',[FrontendClassresultController::class,'index']);

// Gallery

Route::get('/Photo_gallery', [PhotogallaryController::class, 'index'])->name('Photo_gallery');

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
    Route::resource('Description', DescriptionController::class);

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
    Route::resource('Contact', ContactController::class);

    // Administrative information
    Route::resource('Headintro', HeadintroController::class);
    Route::resource('Assheadintro', AssheadintroController::class);
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
    Route::resource('Classmake', classmakeController::class);
    Route::resource('Sectionmake', sectionmakeController::class);
    Route::resource('Students', StudentsController::class);

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

});
