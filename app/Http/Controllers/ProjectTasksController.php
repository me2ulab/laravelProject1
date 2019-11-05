<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Project;


class ProjectTasksController extends Controller
{
    //
    public function update(Task $task)
    {
    	$task->update([
    		'completed'=>request()->has('completed')
    	]
    	);
    	return back();
    	//dd('hello');
    }
    public function store(Project $project)
    {
        $attribute=request()->validate(['description'=>'required']);
    	$project->addTask($attribute);
    	// Task::create([
    	// 	'project_id'=>$project->id,
    	// 	'description'=>request('description')
    	//]);
    	return back();
    	//dd('hello');
    }
}
