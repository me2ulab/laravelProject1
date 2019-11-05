@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-2 ml-auto">
		<a href="/projects/create" class="btn btn-primary"> Add Project</a>
	</div>
</div>
<div class="row d-flex justify-content-center">
	<div class="col-md-4">
		<h1 class="display-5">{{$title}}</h1>
		<ul class="list-unstyled">
		@foreach($project as $projects)
			<li class="nav-item"><a href="/projects/{{$projects->id}}">{{$projects->title}}</a></li>
		@endforeach
		</ul>
	</div>



</div>

@endsection
