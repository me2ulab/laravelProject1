@extends('layouts.app')
@section('content')
<div class="row d-flex justify-content-center">
	<div class="col-md-4 ">
			<h1 class="display-5">Edit Project</h1>
			<form method="POST" action="/projects/{{$project->id}}" class="mb-2">
				@method('PATCH')
				@csrf
				<div class="form-group">
					<label class="form-control-label" for="title"> Title</label>
					<input type="text" name="title" placeholder="Title" class="form-control" value="{{$project->title}}" required>
				</div>
				<div class="form-group">
					<label class="form-control-label" for="description">Description</label>
					<textarea name="description" placeholder="Description" class="form-control" required>{{$project->description}}</textarea>
				</div>
				<button type="submit" class="btn  btn-primary"> Update</button>
			</form>
			<form method="POST" action="/projects/{{$project->id}}">
				@method('DELETE')
				@csrf
				<button class="btn btn-danger" type="submit">Delete</button>

			</form>
				</div>



		</div>
</div>
@endsection
