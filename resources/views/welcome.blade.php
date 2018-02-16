@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                    
                    @if(Auth::guest())
              			<h3>Please login for participate survey</h3>
              			<a href="/login" class="btn btn-warning fa fa-sign-in"> Login </a>
					@endif
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection