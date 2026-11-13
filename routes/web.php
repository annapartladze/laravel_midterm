<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlbumController;

// Redirect the homepage to the albums list
Route::redirect('/', '/albums');

// Display all albums
Route::get('/albums', [AlbumController::class, 'index'])
    ->name('albums.index');

// Show the form for creating an album
Route::get('/albums/create', [AlbumController::class, 'create'])
    ->name('albums.create');

// Save a new album
Route::post('/albums', [AlbumController::class, 'store'])
    ->name('albums.store');

// Show the form for editing an album
Route::get('/albums/{album}/edit', [AlbumController::class, 'edit'])
    ->name('albums.edit');

// Update an existing album
Route::put('/albums/{album}', [AlbumController::class, 'update'])
    ->name('albums.update');

// Delete an album
Route::delete('/albums/{album}', [AlbumController::class, 'destroy'])
    ->name('albums.destroy');
