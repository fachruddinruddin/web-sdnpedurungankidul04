<?php

use Illuminate\Support\Facades\Route;

use App\Http\Livewire\HomePage;
use App\Http\Livewire\ProfilePage;
use App\Http\Livewire\NewsPage;
use App\Http\Livewire\GalleryPage;
use App\Http\Livewire\ContactPage;

Route::get('/', HomePage::class)->name('home');
Route::get('/profile', ProfilePage::class)->name('profile');
Route::get('/news', NewsPage::class)->name('news');
Route::get('/gallery', GalleryPage::class)->name('gallery');
Route::get('/contact', ContactPage::class)->name('contact');