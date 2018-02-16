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
				<div class="panel-heading">Survey Answer</div>
				<div class="panel-body">
				
				{!! Form::open(['url' => url('/questions'), 'name' => 'home', 'method' =>'post', 'id' => 'home']) !!}
								
        			@foreach ($questionListOptions as $questionOptions)
        			
        				<b>{!! $questionOptions->questionTxt !!}</b><br>
        			
        				@foreach ($questionOptions->QuestionOptions as $questionOption)
        					<div class="checkbox">
        						<label>
        						@if(!isset($queAnsArray[$questionOption->questionListId.'_'.$questionOption->quesNumber]))
        							{!! Form::checkbox('questions[]', $questionOption->questionListId.'_'.$questionOption->quesNumber, false, ['id' => 'remember']) !!} {!! $questionOption->questionOptionsTxt !!}
        						@else
        							{!! Form::checkbox('questions[]', $questionOption->questionListId.'_'.$questionOption->quesNumber, true, ['id' => 'remember']) !!} {!! $questionOption->questionOptionsTxt !!}
        						@endif
        						</label>
        					</div>
        				@endforeach
        			@endforeach
				
					<a class = "btn btn-success btn-sm pull-left" href = "{{url('/questions/index')}}">Back to List</a>
				{!!	Form::close() !!}

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

</body>
</html>