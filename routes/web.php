<?php

use App\Livewire\Pages\Blog\Index;
use App\Livewire\Pages\Blog\Show;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/blog', function () {
    return view('livewire.pages.blog.index', ['articles' => config('articles.articles')]);
});

Route::get('/blog/{id}', Show::class)->name('blog.show');

Route::get('/projects', function () {
    return view('livewire.pages.project.index', ['projects' => config('projects.projects')]);
});
