<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorTrackingController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return redirect()->route('login'); // Redirect to the login page
});

//frontend

Route::get('/', [FrontController::class, 'index'])->name('front.home');

Route::get('/about', [FrontController::class, 'about'])->name('front.about');
Route::get('/contact', [FrontController::class, 'contact'])->name('front.contact');
Route::get('/pricing', [FrontController::class, 'pricing'])->name('front.pricing');
Route::get('/projects', [FrontController::class, 'projects'])->name('front.projects');
Route::get('/projects/{id}', [FrontController::class, 'projectDetails'])->name('front.project.details');
Route::get('/blog', [FrontController::class, 'blog'])->name('front.blog');
Route::get('/blog/{id}', [FrontController::class, 'blogDetails'])->name('front.blog.details');


// Route::get('/team', [FrontController::class, 'team'])->name('front.team');
// Route::get('/faq', [FrontController::class, 'faq'])->name('front.faq');
// Route::get('/privacy-policy', [FrontController::class, 'privacyPolicy'])->name('front.privacy.policy');
// Route::get('/terms-and-conditions', [FrontController::class, 'termsAndConditions'])->name('front.terms.and.conditions');
// Route::get('/portfolio', [FrontController::class, 'portfolio'])->name('front.portfolio');
// Route::get('/portfolio/{id}', [FrontController::class, 'portfolioDetails'])->name('front.portfolio.details');
// Route::get('/testimonials', [FrontController::class, 'testimonials'])->name('front.testimonials');
// Route::get('/careers', [FrontController::class, 'careers'])->name('front.careers');
// Route::get('/career/{id}', [FrontController::class, 'careerDetails'])->name('front.career.details');
// Route::get('/search', [FrontController::class, 'search'])->name('front.search');
// Route::get('/search-results', [FrontController::class, 'searchResults'])->name('front.search.results');
// Route::get('/blog-category/{category}', [FrontController::class, 'blogCategory'])->name('front.blog.category');
// Route::get('/blog-tag/{tag}', [FrontController::class, 'blogTag'])->name('front.blog.tag');
// Route::get('/blog-archive', [FrontController::class, 'blogArchive'])->name('front.blog.archive');
// Route::get('/blog-archive/{year}/{month}', [FrontController::class, 'blogArchiveByDate'])->name('front.blog.archive.date');
// Route::get('/blog-author/{author}', [FrontController::class, 'blogAuthor'])->name('front.blog.author');
// Route::get('/blog-comments', [FrontController::class, 'blogComments'])->name('front.blog.comments');
// Route::get('/blog-comments/{id}', [FrontController::class, 'blogCommentDetails'])->name('front.blog.comment.details');
// Route::get('/blog-comments/{id}/edit', [FrontController::class, 'editBlogComment'])->name('front.blog.comment.edit');
// Route::post('/blog-comments', [FrontController::class, 'storeBlogComment'])->name('front.blog.comment.store');
// Route::get('/blog-comments/{id}/delete', [FrontController::class, 'deleteBlogComment'])->name('front.blog.comment.delete');
// Route::get('/blog-comments/{id}/reply', [FrontController::class, 'replyToBlogComment'])->name('front.blog.comment.reply');
// Route::get('/blog-comments/{id}/like', [FrontController::class, 'likeBlogComment'])->name('front.blog.comment.like');
// Route::get('/blog-comments/{id}/dislike', [FrontController::class, 'dislikeBlogComment'])->name('front.blog.comment.dislike');
// Route::get('/blog-comments/{id}/report', [FrontController::class, 'reportBlogComment'])->name('front.blog.comment.report');
// Route::get('/blog-comments/{id}/approve', [FrontController::class, 'approveBlogComment'])->name('front.blog.comment.approve');
// Route::get('/blog-comments/{id}/unapprove', [FrontController::class, 'unapproveBlogComment'])->name('front.blog.comment.unapprove');
// Route::get('/blog-comments/{id}/delete', [FrontController::class, 'deleteBlogComment'])->name('front.blog.comment.delete');
// Route::get('/blog-comments/{id}/edit', [FrontController::class, 'editBlogComment'])->name('front.blog.comment.edit');
// Route::get('/blog-comments/{id}/reply', [FrontController::class, 'replyToBlogComment'])->name('front.blog.comment.reply');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::get('test', [DashboardController::class, 'test'])->middleware('auth', 'role:admin');
Route::get('user-test', [DashboardController::class, 'test'])->middleware('auth', 'role:user');



Route::middleware('auth', 'verified')->group(function () {
    Route::resource('projects', ProjectController::class);
    Route::resource('users', UserController::class)->middleware('role:admin');
    Route::resource('error_trackings', ErrorTrackingController::class);


    Route::get('/dashboard', [DashboardController::class, 'dashboard'])
        ->middleware(['auth', 'verified'])
        ->name('dashboard');


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->middleware(['auth', 'verified'])->name('dashboard');


});
