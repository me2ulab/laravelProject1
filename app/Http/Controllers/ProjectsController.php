<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    //
    public function index()
    {
    	$project=Project::all();
    	$title='View Projects';


    	return view('projects.index',compact('project','title'));
    }
    public function create()
    {
    	return view('projects.create');
    }
    public function store()
    {
    	// $project=new Project();
    	// $project->title=request('title');
    	// $project->description=request('description');
    	// $project->save();
    	Project::create(request()->validate([
    		'title'=>['required','min:3','max:30'],
    		'description'=>['required','min:3']
    	]
    	));
    	//Project::create(request(['title','description']));
    	return redirect('/projects');
    }
    public function edit(Project $project)
    {
    	// $project=Project::findOrFail($id);
    	return view('projects.edit',compact('project'));
    }
    public function update(Project $project)
    {
    $project->update(request(['title','description']));
    	// $project=Project::findOrFail($id);
    	// $project->title=request('title');
    	// $project->description=request('description');
    	// $project->save();
    	return redirect('/projects');
    }
    public function show(Project $project)
    {
    	return view('projects.show',compact('project'));

    }
    public function destroy(Project $project)
    {
    	// Project::findOrFail($id)->delete();
    	$project->delete();
    	return redirect('/projects');
    }
}
