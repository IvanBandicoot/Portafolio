<?php

/*Idioma*/

App::setlocale('es');

Route::view('/', 'home')->name('home');

Route::view('/sobre', 'about')->name('about');

// Route::get('/proyectos', 'projectController@index')->name('projects.index');

// Route::get('/proyectos/crear', 'projectController@create')->name('projects.create');

// Route::get('/proyectos/{project}/editar', 'projectController@edit')->name('projects.edit');

// Route::post('/proyectos', 'projectController@store')->name('projects.store');

// Route::get('/proyectos/{project}', 'projectController@show')->name('projects.show');

// Route::delete('/proyecto/{project}', 'projectController@destroy')->name('projects.destroy');

Route::resource('/proyectos', 'projectController')
	->parameters(['proyectos' => 'project'])
	->names('projects');

Route::view('/galeria', 'galery')->name('galery');

Route::view('/contacto', 'contact')->name('contact');

Route::post('contact', 'MessagesController@store')->name('messages.store');

Auth::routes();
