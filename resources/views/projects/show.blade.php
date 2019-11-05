@extends('layouts.app')
@section('content')
<div class="row d-flex justify-content-center">
	<div class="col-md-4">
		<h3 class="mb-3">{{$project->title}}</h3>
		<p class="mb-2">{{$project->description}}</p>
		<a href="/projects/{{$project->id}}/edit" class="mb-auto"> Edit</a>
		@if($project->tasks->count())
		<div class="border border-primary rounded mt-3">
			@foreach($project->tasks as $task)
			<form action="/tasks/{{$task->id}}" method="POST" >
				@method('PATCH')
				@csrf
				<div class="form-group ">

					<label class="form-check-label {{$task->completed?' is_completed':''}} px-2 pt-2">
					<input  type="checkbox" name="completed" onchange="this.form.submit()" {{$task->completed?'checked':''}}>
					{{$task->description}}
				</label>
				</div>


			</form>
			@endforeach
		</div>
		@endif

	</div>
	<div class="col-md-4">
 @include('errors')
		<form method="POST" action="/completed-task/{{$project->id}}/tasks">
			@csrf
		<div class="form-group">
			<label for="description" class="form-control-label">Description</label>
			<input type="text" name="description" class="form-control">
		</div>
		<button class="btn btn-primary" type="submit"> Add New Task</button>
		</form>

	</div>
</div>
@endsection
