@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome to Surver App</div>
				<div class="panel-body">
					<a class = "btn btn-success btn-sm pull-left" href = "{{url('/questions/index')}}">Go to List</a>
					<a class = "btn btn-success btn-sm pull-right" href = "{{url('/questions/create')}}">Create Survey</a>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
