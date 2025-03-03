<?php

use App\Models\job;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $jobs= job::all();
    dd($jobs[0]->salary);
});
Route::get('/job', function () {  
    $jobs=job::with('employer')->get();
    // $jobs=job::all();
    return view('jobs',['jobs'=>$jobs]);
    // return $jobs;
});
Route::get('/job/{id}', function ($id) {
    $job=job::find($id);
    return $job;
});     
Route::get('pagination', function () {
    $job=job::paginate(3);
    return $job;
});