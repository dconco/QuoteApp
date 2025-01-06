<?php

use Illuminate\Support\Facades\Route;

Route::view('/auth', 'auth/auth');
Route::view('/saved', 'auth/saved');

Route::group(['prefix' => 'payment'], function () {
	Route::view('/complete', 'payment.payment-complete');
	Route::view('/method', 'payment.select-method');
});

Route::view('/authors', 'authors');
Route::view('/category', 'category');
Route::view('/challenge', 'challenge');
Route::view('/chat', 'chat');
Route::view('/clean', 'clean');
Route::view('/dashboard', 'dashboard');
Route::view('/following', 'following');
Route::view('/list', 'list');

Route::group(['prefix' => 'm'], function () {
	Route::view('/log', 'm-log');
	Route::view('/group', 'm-group');
	Route::view('/reported', 'm-reported');
	Route::view('/dashboard', 'dashboard.m-dashboard');
});

Route::view('/menu', 'menu');
Route::view('/moderate', 'moderate');
Route::view('/pending', 'my-pending');
Route::view('/new', 'new');
Route::view('/newsfeed', 'newsfeed');
Route::view('/notification', 'notification');
Route::view('/profile', 'profile');
Route::view('/rules', 'rules');
Route::view('/selected-plan', 'selected-plan');
Route::view('/settings', 'settings');
Route::view('/status', 'status');
Route::view('/timer', 'timer');

Route::fallback(fn() => view('error.404'));