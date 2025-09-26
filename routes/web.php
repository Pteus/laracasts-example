<?php

use App\Models\Job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => Job::all()]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs/{id}', function (int $id) {

    $job = Arr::first(Job::all(), fn($job) => $job['id'] === $id);

    if (!$job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});
