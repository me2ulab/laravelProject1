@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-2 ml-auto">
			<a href="/projects/" class="btn btn-primary"> View Projects</a>
		</div>
	</div>
	<div class="row d-flex justify-content-center">
		<div class="col-md-4 ">

			<h1 class="display-5">Create Project</h1>
			<form method="POST" action="/projects">
				@include('errors')
				@csrf
				<div class="form-group">
					<label class="form-control-label" for="title"> Title</label>
					<input type="text" name="title" placeholder="Title" class="form-control {{$errors->has('title')?'border-danger':''}}" value="{{old('title')}}">
				</div>
				<div class="form-group">
					<label class="form-control-label" for="description">Description</label>
					<textarea name="description" placeholder="Description" class="form-control {{$errors->has('description')?'border-danger':''}}" >{{old('description')}}</textarea>
				</div>
				<button type="submit" class="btn  btn-primary"> Submit</button>
				</div>


			</form>
		</div>
	</div>
</div>

@endsection
