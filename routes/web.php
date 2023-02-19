<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Auth\AdminController;
use App\Http\Controllers\Auth\AuthorController;
use App\Http\Controllers\CompanyCategoryController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobApplicationController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\savedJobController;
use App\Http\Controllers\UserDetailController;
use App\Http\Controllers\EducationController;
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
        return view('pages/user_detail/create', compact('image', 'color', 'templatePath'));
    });
    Route::get('/form-page/{image}/{color}/{bg_color}/{templatePath}', function ($image, $color, $bg_color, $templatePath) {
        return view('pages/user_detail/create', compact('image', 'color', 'bg_color', 'templatePath'));
    });
    // user detail
    Route::post('/user-detail/{image}/{color}/{bg_color}/{templatePath}', [UserDetailController::class, 'bgstore']);
    Route::post('/user-detail/{image}/{color}/{templatePath}', [UserDetailController::class, 'store']);

    // Education form page
    Route::get('/education-create/{image}/{color}/{bg_color}/{templatePath}', [EducationController::class, 'bgcreate']);
    Route::get('/education-create/{image}/{color}/{templatePath}', [EducationController::class, 'create']);
    // Education detail
    Route::post('/education-detail/{image}/{color}/{bg_color}/{templatePath}', [EducationController::class, 'bgstore']);
    Route::post('/education-detail/{image}/{color}/{templatePath}', [EducationController::class, 'store']);
    // Education description
    Route::get('/education-description/{image}/{color}/{bg_color}/{templatePath}', [EducationController::class, 'bgindex']);
    Route::get('/education-description/{image}/{color}/{templatePath}', [EducationController::class, 'index']);

    // Education Delete
    Route::get('/education-delete/{image}/{color}/{bg_color}/{templatePath}/{id}', [EducationController::class, 'bgdelete']);
    Route::get('/education-delete/{image}/{color}/{templatePath}/{id}', [EducationController::class, 'delete']);



    // CV
    Route::get('/cvtemp1/{image}/{color}', function ($image, $color) {
        return view('Templates/cvTemplates/template1', compact('color', 'image'));
    });
    Route::get('/cvtemp2/{image}/{color}/{bg_color}', function ($image, $color, $bg_color) {
        return view('Templates/cvTemplates/template2', compact('image', 'color', 'bg_color'));
    });
    Route::get('/cvtemp3/{image}/{color}/{bg_color}', function ($image, $color, $bg_color) {
        return view('Templates/cvTemplates/template3', compact('image', 'color', 'bg_color'));
    });

    // Cover Letter
    Route::get('/cltemp1', function () {
        return view('Templates/CoverLetterTemplates/clTemplate1');
    });
    Route::get('/cltemp2', function () {
        return view('Templates/CoverLetterTemplates/clTemplate2');
    });
    Route::get('/cltemp3', function () {
        return view('Templates/CoverLetterTemplates/clTemplate3');
    });
    Route::get('/cltemp4', function () {
        return view('Templates/CoverLetterTemplates/clTemplate4');
    });
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