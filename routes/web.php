<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Collection;

Route::get('/', function () {    
    $lines = App\Line::all();
    return view('home', compact('lines'));
});

Route::get('/miembros', function () {    
    $collectives = App\Collective::all();
    return view('members', compact('collectives'));
});

Route::get('/proyectos', function () {    
    $projects = App\Project::all();
    return view('projects', compact('projects'));
});

Route::get('/desarrollos', function () {    
    $developments = App\Development::all();
    return view('developments', compact('developments'));
});

Route::get('/desarrollos/linea-investigacion/{id}', function ($id) {   
    $line = App\Line::findOrFail($id);
    $developments = new Collection;
    foreach ($line->projects as $project)
    {
        foreach ($project->developments as $development) {
            $developments->push($development);
        }
    }
    $developments = $developments->unique("id");
    return view('developments', compact('developments','line'));
});

Route::get('/proyectos/linea-investigacion/{id}', function ($id) {   
    $line = App\Line::findOrFail($id);
    $projects = $line->projects;
    return view('projects', compact('projects','line'));
});

Route::get('/publicaciones', function () {    
    return view('publications');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
