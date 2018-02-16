<!doctype html>
<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<title>Create Vendor</title>
	<meta name = "viewport" content = "width=device-width, initial-scale=1">
	<link type = "text/css" rel = "stylesheet"
	      href = "//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
</head>
<body>
@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Please Answer Survey</div>
				<div class="panel-body">
				
				{!! Form::open(['url' => url('/questions'), 'name' => 'home', 'method' =>'post', 'id' => 'home']) !!}
								
        			@foreach ($questionListOptions as $questionOptions)
        			
        				<b>{!! $questionOptions->questionTxt !!}</b><br>
        			
        				@foreach ($questionOptions->QuestionOptions as $questionOption)
        					<div class="checkbox">
        						<label>
        							{!! Form::checkbox('questions[]', $questionOption->questionListId.'_'.$questionOption->quesNumber, false, ['id' => 'remember']) !!} {!! $questionOption->questionOptionsTxt !!}
        						</label>
        					</div>
        				@endforeach
        			@endforeach
				
				{{ Form::submit('Save', array('class' => 'btn btn-primary')) }}
				{{ Form::reset('Reset', array('class' => 'btn btn-info')) }}
				<a href="{{url('/questions/index')}}" class="btn btn-info" role="button">Back to List</a>
				{!!	Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

</body>
</html>