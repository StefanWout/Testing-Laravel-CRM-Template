<?php

use Illuminate\Support\Facades\Route;

// Dashboard Routes
Route::get('/', function () {
    return view('pages.dashboard');
})->name('dashboard');

Route::get('/analytics', function () {
    return view('pages.analytics');
})->name('analytics');

// Reports Routes
Route::prefix('reports')->name('reports.')->group(function () {
    Route::get('/sales', function () {
        return view('pages.reports-sales');
    })->name('sales');
    
    Route::get('/leads', function () {
        return view('pages.reports-leads');
    })->name('leads');
    
    Route::get('/project', function () {
        return view('pages.reports-project');
    })->name('project');
    
    Route::get('/timesheets', function () {
        return view('pages.reports-timesheets');
    })->name('timesheets');
});

// Applications Routes
Route::prefix('apps')->name('apps.')->group(function () {
    Route::get('/chat', function () {
        return view('pages.chat');
    })->name('chat');
    
    Route::get('/email', function () {
        return view('pages.email');
    })->name('email');
    
    Route::get('/tasks', function () {
        return view('pages.tasks');
    })->name('tasks');
    
    Route::get('/notes', function () {
        return view('pages.notes');
    })->name('notes');
    
    Route::get('/storage', function () {
        return view('pages.storage');
    })->name('storage');
    
    Route::get('/calendar', function () {
        return view('pages.calendar');
    })->name('calendar');
});

// Logout route (for header)
Route::post('/logout', function () {
    return redirect()->route('dashboard');
})->name('logout');
