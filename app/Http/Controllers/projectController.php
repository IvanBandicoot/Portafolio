<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\SaveProjectRequest;

class projectController extends Controller
{
    //

    function __construct()
    {
        $this->middleware(['auth','role:admin,diseno']);
    }

    public function index(){

    	return view('projects.index', [

    		'project' => Project::latest()->paginate(5),

    	]);
    }

    public function create(){

    	return view('projects.create', [

    		'project' => new Project

    	]);

    }

    public function store(SaveProjectRequest $request){

    	Project::create( $request->validated() );

    	return redirect()->route('projects.index')->with('status', 'El proyecto fue creado con exito');

    }

    public function show(Project $project){

    	return view('projects.show', [

    		'project' => $project,

    	]);

    }

    public function edit(Project $project){

    	return view('projects.edit', [

    		'project' => $project,

    	]);

    }

    public function update(Project $project, SaveProjectRequest $request){

    	$project->update( $request->validated() );

    	return redirect()->route('projects.show', $project)->with('status', 'El proyecto fue editado con exito');

    }

    public function destroy(Project $project){

    	$project->delete();

    	return redirect()->route('projects.index')->with('status', 'El proyecto fue eliminado con exito');

    }

}
