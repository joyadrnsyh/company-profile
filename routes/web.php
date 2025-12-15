<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Front\Pages\Home;
use App\Livewire\Front\Pages\About;
use App\Livewire\Front\Pages\Services;
use App\Livewire\Front\Pages\Contact;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/services', Services::class)->name('services');
Route::get('/contact', Contact::class)->name('contact');
