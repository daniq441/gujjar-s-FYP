<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthorController;
use App\Http\Controllers\ClReceiverController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CoverletterController;
use App\Http\Controllers\ClUserController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\savedJobController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\CvController;
use App\Models\UserDetail;
use Illuminate\Support\Facades\Route;

//public routes
Route::get('/', [PostController::class, 'index'])->name('post.index');
Route::get('/job/{job}', [PostController::class, 'show'])->name('post.show');
Route::get('employer/{employer}', [AuthorController::class, 'employer'])->name('account.employer');

//return vue page
Route::get('/search', [JobController::class, 'index'])->name('job.index');

//auth routes
Route::middleware('auth')->prefix('account')->group(function () {
    // Route::middleware('auth')->group(function () {
    //every auth routes AccountController
    Route::get('logout', [AccountController::class, 'logout'])->name('account.logout');
    Route::get('overview', [AccountController::class, 'index'])->name('account.index');
    Route::get('deactivate', [AccountController::class, 'deactivateView'])->name('account.deactivate');
    Route::get('change-password', [AccountController::class, 'changePasswordView'])->name('account.changePassword');
    Route::delete('delete', [AccountController::class, 'deleteAccount'])->name('account.delete');
    Route::put('change-password', [AccountController::class, 'changePassword'])->name('account.changePassword');
    //savedJobs
    Route::get('my-saved-jobs', [savedJobController::class, 'index'])->name('savedJob.index');
    Route::get('my-saved-jobs/{id}', [savedJobController::class, 'store'])->name('savedJob.store');
    Route::delete('my-saved-jobs/{id}', [savedJobController::class, 'destroy'])->name('savedJob.destroy');
    //applyjobs
    Route::get('apply-job', [AccountController::class, 'applyJobView'])->name('account.applyJob');
    Route::post('apply-job', [AccountController::class, 'applyJob'])->name('account.applyJob');

    //Admin Role Routes
    Route::group(
        ['middleware' => ['role:admin']],
        function () {
            Route::get('dashboard', [AdminController::class, 'dashboard'])->name('account.dashboard');
            Route::get('view-all-users', [AdminController::class, 'viewAllUsers'])->name('account.viewAllUsers');
            Route::delete('view-all-users', [AdminController::class, 'destroyUser'])->name('account.destroyUser');

            Route::get('category/{category}/edit', [CompanyCategoryController::class, 'edit'])->name('category.edit');
            Route::post('category', [CompanyCategoryController::class, 'store'])->name('category.store');
            Route::put('category/{id}', [CompanyCategoryController::class, 'update'])->name('category.update');
            Route::delete('category/{id}', [CompanyCategoryController::class, 'destroy'])->name('category.destroy');
        }
    );

    //Author Role Routes
    Route::group(
        ['middleware' => ['role:author']],
        function () {
            Route::get('author-section', [AuthorController::class, 'authorSection'])->name('account.authorSection');

            Route::get('job-application/{id}', [JobApplicationController::class, 'show'])->name('jobApplication.show');
            Route::delete('job-application', [JobApplicationController::class, 'destroy'])->name('jobApplication.destroy');
            Route::get('job-application', [JobApplicationController::class, 'index'])->name('jobApplication.index');

            Route::get('post/create', [PostController::class, 'create'])->name('post.create');
            Route::post('post', [PostController::class, 'store'])->name('post.store');
            Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
            Route::put('post/{post}', [PostController::class, 'update'])->name('post.update');
            Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

            Route::get('company/create', [CompanyController::class, 'create'])->name('company.create');
            Route::put('company/{id}', [CompanyController::class, 'update'])->name('company.update');
            Route::post('company', [CompanyController::class, 'store'])->name('company.store');
            Route::get('company/edit', [CompanyController::class, 'edit'])->name('company.edit');
            Route::delete('company', [CompanyController::class, 'destroy'])->name('company.destroy');
        }
    );

    //User Role routes
    Route::group(
        ['middleware' => ['role:user']],
        function () {
            Route::get('become-employer', [AccountController::class, 'becomeEmployerView'])->name('account.becomeEmployer');
            Route::post('become-employer', [AccountController::class, 'becomeEmployer'])->name('account.becomeEmployer');
        }
    );
});


Route::middleware('auth')->group(function () {

    // option page
    Route::get('/option-page/{image}/{color}/{templatePath}', function ($image, $color, $templatePath) {
        return view('pages/option', compact('image', 'color', 'templatePath'));
    });
    Route::get('/option-page/{image}/{color}/{bg_color}/{templatePath}', function ($image, $color, $bg_color, $templatePath) {
        return view('pages/option', compact('image', 'color', 'bg_color', 'templatePath'));
    });

    // User detail form page
    Route::get('/form-page/{image}/{color}/{templatePath}', function ($image, $color, $templatePath) {
        $user_id = auth()->id();
        $user_existing_data = UserDetail::where('user_id', $user_id)->get();
        $user_existing_data->each->delete();
        return view('pages/user_detail/create', compact('image', 'color', 'templatePath'));
    });
    Route::get('/form-page/{image}/{color}/{bg_color}/{templatePath}', function ($image, $color, $bg_color, $templatePath) {
        $user_id = auth()->id();
        $user_existing_data = UserDetail::where('user_id', $user_id)->get();
        $user_existing_data->each->delete();
        return view('pages/user_detail/create', compact('image', 'color', 'bg_color', 'templatePath'));
    });
    // user detail
    Route::post('/user-detail/{image}/{color}/{bg_color}/{templatePath}', [UserDetailController::class, 'bgstore']);
    Route::post('/user-detail/{image}/{color}/{templatePath}', [UserDetailController::class, 'store']);
    // User description
    Route::get('/user-description/{image}/{color}/{bg_color}/{templatePath}', [UserDetailController::class, 'bgindex']);
    Route::get('/user-description/{image}/{color}/{templatePath}', [UserDetailController::class, 'index']);
    // User Delete
    Route::get('/user-delete/{image}/{color}/{bg_color}/{templatePath}/{id}', [UserDetailController::class, 'bgdelete']);
    Route::get('/user-delete/{image}/{color}/{templatePath}/{id}', [UserDetailController::class, 'delete']);
    // User edit
    Route::get('/user-edit/{image}/{color}/{bg_color}/{templatePath}/{id}', [UserDetailController::class, 'bgedit']);
    Route::get('/user-edit/{image}/{color}/{templatePath}/{id}', [UserDetailController::class, 'edit']);
    // User update
    Route::post('/user-update/{image}/{color}/{bg_color}/{templatePath}/{id}', [UserDetailController::class, 'bgupdate']);
    Route::post('/user-update/{image}/{color}/{templatePath}/{id}', [UserDetailController::class, 'update']);

    // Education form page
    Route::get('/education-create/{image}/{color}/{bg_color}/{templatePath}', [EducationController::class, 'bgcreate']);
    Route::get('/education-create/{image}/{color}/{templatePath}', [EducationController::class, 'create']);
    // Education store
    Route::post('/education-detail/{image}/{color}/{bg_color}/{templatePath}', [EducationController::class, 'bgstore']);
    Route::post('/education-detail/{image}/{color}/{templatePath}', [EducationController::class, 'store']);
    // Education description
    Route::get('/education-description/{image}/{color}/{bg_color}/{templatePath}', [EducationController::class, 'bgindex']);
    Route::get('/education-description/{image}/{color}/{templatePath}', [EducationController::class, 'index']);
    // Education Delete
    Route::get('/education-delete/{image}/{color}/{bg_color}/{templatePath}/{id}', [EducationController::class, 'bgdelete']);
    Route::get('/education-delete/{image}/{color}/{templatePath}/{id}', [EducationController::class, 'delete']);
    // Education edit
    Route::get('/education-edit/{image}/{color}/{bg_color}/{templatePath}/{id}', [EducationController::class, 'bgedit']);
    Route::get('/education-edit/{image}/{color}/{templatePath}/{id}', [EducationController::class, 'edit']);
    // Education update
    Route::post('/education-update/{image}/{color}/{bg_color}/{templatePath}/{id}', [EducationController::class, 'bgupdate']);
    Route::post('/education-update/{image}/{color}/{templatePath}/{id}', [EducationController::class, 'update']);

    //Experience create
    Route::get('/experience-create/{image}/{color}/{bg_color}/{templatePath}', [ExperienceController::class, 'bgcreate']);
    Route::get('/experience-create/{image}/{color}/{templatePath}', [ExperienceController::class, 'create']);
    //Experience store
    Route::post('/experience-store/{image}/{color}/{bg_color}/{templatePath}', [ExperienceController::class, 'bgstore']);
    Route::post('/experience-store/{image}/{color}/{templatePath}', [ExperienceController::class, 'store']);
    //Experience description
    Route::get('/experience-description/{image}/{color}/{bg_color}/{templatePath}', [ExperienceController::class, 'bgindex']);
    Route::get('/experience-description/{image}/{color}/{templatePath}', [ExperienceController::class, 'index']);
    //Experience Delete
    Route::get('/experience-delete/{image}/{color}/{bg_color}/{templatePath}/{id}', [ExperienceController::class, 'bgdelete']);
    Route::get('/experience-delete/{image}/{color}/{templatePath}/{id}', [ExperienceController::class, 'delete']);
    //Experience edit
    Route::get('/experience-edit/{image}/{color}/{bg_color}/{templatePath}/{id}', [ExperienceController::class, 'bgedit']);
    Route::get('/experience-edit/{image}/{color}/{templatePath}/{id}', [ExperienceController::class, 'edit']);
    //Experience update
    Route::post('/experience-update/{image}/{color}/{bg_color}/{templatePath}/{id}', [ExperienceController::class, 'bgupdate']);
    Route::post('/experience-update/{image}/{color}/{templatePath}/{id}', [ExperienceController::class, 'update']);

    //Skill create
    Route::get('/skill-create/{image}/{color}/{bg_color}/{templatePath}', [SkillController::class, 'bgcreate']);
    Route::get('/skill-create/{image}/{color}/{templatePath}', [SkillController::class, 'create']);
    //Skill store
    Route::post('/skill-store/{image}/{color}/{bg_color}/{templatePath}', [SkillController::class, 'bgstore']);
    Route::post('/skill-store/{image}/{color}/{templatePath}', [SkillController::class, 'store']);
    //Skill description
    Route::get('/skill-description/{image}/{color}/{bg_color}/{templatePath}', [SkillController::class, 'bgindex']);
    Route::get('/skill-description/{image}/{color}/{templatePath}', [SkillController::class, 'index']);
    //Skill Delete
    Route::get('/skill-delete/{image}/{color}/{bg_color}/{templatePath}/{id}', [SkillController::class, 'bgdelete']);
    Route::get('/skill-delete/{image}/{color}/{templatePath}/{id}', [SkillController::class, 'delete']);
    //Skill edit
    Route::get('/skill-edit/{image}/{color}/{bg_color}/{templatePath}/{id}', [SkillController::class, 'bgedit']);
    Route::get('/skill-edit/{image}/{color}/{templatePath}/{id}', [SkillController::class, 'edit']);
    //Skill update
    Route::post('/skill-update/{image}/{color}/{bg_color}/{templatePath}/{id}', [SkillController::class, 'bgupdate']);
    Route::post('/skill-update/{image}/{color}/{templatePath}/{id}', [SkillController::class, 'update']);

    // // CV bulding passing data
    // Route::get('/make-cv/{image}/{color}/{bg_color}/{templatePath}', [CvController::class, 'bgindex']);
    // Route::get('/make-cv/{image}/{color}/{templatePath}', [CvController::class, 'index']);
    // CV
    Route::get('/cvtemp1/{image}/{color}', [CvController::class, 'template1']);
    Route::get('/cvtemp2/{image}/{color}/{bg_color}',  [CvController::class, 'template2']);
    Route::get('/cvtemp3/{image}/{color}/{bg_color}',  [CvController::class, 'template3']);

    // Cover Letter
    Route::get('CL-detail/{templatePath}',[CoverletterController::class, 'index'])->name('detailCoverletter');
    // Information delete
    Route::get('CL-delete/{templatePath}/{userId}/{recipientId}',[CoverletterController::class, 'delete'])->name('deleteCoverletter');

    // Cl user create
    Route::get('CL-usersDetail-create/{templatePath}',[ClUserController::class, 'create'])->name('clUserDetail');
    // Cl user store
    Route::post('users-store/{templatePath}',[ClUserController::class, 'store'])->name('clUserStore');
    // Cl user edit
    Route::get('CL-userDetail-edit/{templatePath}/{userId}',[ClUserController::class, 'edit'])->name('userEditCoverletter');
    // Cl user update
    Route::post('CL-userDetail-update/{templatePath}/{userId}',[ClUserController::class, 'update'])->name('userUpdateCoverletter');
    //Cl opening edit
    Route::get('CL-opening-edit/{templatePath}/{userId}',[ClUserController::class, 'openingEdit'])->name('clOpeningEdit');
    //Cl opening update
    Route::post('CL-opening-update/{templatePath}/{userId}',[ClUserController::class, 'openingUpdate'])->name('clOpeningUpdate');
    //Cl body edit
    Route::get('CL-body-edit/{templatePath}/{userId}',[ClUserController::class, 'bodyEdit'])->name('clBodyEdit');
    //Cl body update
    Route::post('CL-body-update/{templatePath}/{userId}',[ClUserController::class, 'bodyUpdate'])->name('clBodyUpdate');
    //Cl closing edit
    Route::get('CL-closing-edit/{templatePath}/{userId}',[ClUserController::class, 'closingEdit'])->name('clClosingEdit');
    //Cl closing update
    Route::post('CL-closing-update/{templatePath}/{userId}',[ClUserController::class, 'closingUpdate'])->name('clClosingUpdate');


    // CL recipient create
    Route::get('recipient-create/{templatePath}',[ClReceiverController::class, 'create'])->name('clRecipientCreate');
    // CL recipient store
    Route::post('recipient-store/{templatePath}',[ClReceiverController::class, 'store'])->name('clRecipientStore');
    // CL recipient edit
    Route::get('recipient-edit/{templatePath}/{recipientId}',[ClReceiverController::class, 'edit'])->name('clRecipientEdit');
    // CL recipient uupdate
    Route::post('recipient-update/{templatePath}/{recipientId}',[ClReceiverController::class, 'update'])->name('clRecipientUpdate');

    //Cover Letters
    Route::get('/cascade-template', [CoverletterController::class, 'cascadeTemplate'])->name('cascade-template');
    Route::get('/crisp-template', [CoverletterController::class, 'crispTemplate'])->name('crisp-template');
    Route::get('/influx-template', [CoverletterController::class, 'influxTemplate'])->name('influx-template');
    Route::get('/iconic-template', [CoverletterController::class, 'iconicTemplate'])->name('iconic-template');
});
// CV
// Route::get('/cvtemp1/{image}/{color}', function ($image, $color) {
//     return view('Templates/cvTemplates/template1', compact('color', 'image'));
// });
// Route::get('/cvtemp2/{image}/{color}/{bg_color}', function ($image, $color, $bg_color) {
//     return view('Templates/cvTemplates/template2', compact('image', 'color', 'bg_color'));
// });
// Route::get('/cvtemp3/{image}/{color}/{bg_color}', function ($image, $color, $bg_color) {
//     return view('Templates/cvTemplates/template3', compact('image', 'color', 'bg_color'));
// });
// Cover Letter


// Route::get('/cltemp1', function () {
//     return view('Templates/CoverLetterTemplates/clTemplate1');
// });
// Route::get('/cltemp2', function () {
//     return view('Templates/CoverLetterTemplates/clTemplate2');
// });
// Route::get('/cltemp3', function () {
//     return view('Templates/CoverLetterTemplates/clTemplate3');
// });
// Route::get('/cltemp4', function () {
//     return view('Templates/CoverLetterTemplates/clTemplate4');
// });

// Cover letter page
Route::get('/cover-letter-page', function () {
    return view('pages/coverLetter');
});

//CV page
Route::get('/cv-page', function () {
    return view('pages/cv');
});
// Route::get('/form-page', function () {
//     return view('pages/cvForm');
// });
