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
				<div class="panel-heading">Survey Reports</div>
				<div class="panel-body">
				<a class = "btn btn-success btn-sm pull-right" href = "{{url('/questions/create')}}">Create Survey</a>
    				<div class = "col-md-12 pull-right" style = "margin: 10px;">
    					
    							@if(count($questions) > 0)
                        			<table class = "table table-bordered">
                        				<tr>
                        					<th>SL</th>
                        					<th>Answers<br>Date Time</th>
                        					<th>View<br>Answers</th>
                        				</tr>
                        				@foreach($questions as $question)
                        					<tr data-id = "{{$question->id}}">
                        						<td>{{ $count++ }}</td>
                        						<td>{{ $question->created_at }}</td>
                        						<td>
                        							<a href = "{{ url(sprintf("/questions/%d", $question->id)) }}" data-toggle = "tooltip" data-placement = "top" title = "View"><i class = 'fa fa-eye text-primary'></i> View Answer</a>
                        						</td>
                        					</tr>
                        				@endforeach
                        			</table>
                        			
			
                        		@else
                        			<div class = "col-xs-12">
                        				<div class = "alert alert-warning text-center">
                        					<h3>Please Create Survey First</h3>
                        				</div>
                        			</div>
                        		@endif
		
    				</div>

				</div>
			</div>
		</div>
	</div>
</div>
@endsection

</body>
</html>
