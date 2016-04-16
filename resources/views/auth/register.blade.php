@extends('app')

@section('header')
	<style type="text/css">
		.reveal-menu-hidden{
			top: 0;
		}
	</style>
@endsection
@section('content')
<div class="container" style="margin-top: 100px;">
	<h1>:P - Kalo mau daftar jadi peserta <a href="{{ url('/') }} #daftar"> kesini </a> bos, kalo mau retas gak papa, terus laporin celahnya ke sini ya <a href="mailto:sekretariat@doscom.org?Subject=Release%20Party" target="_top">sekretariat@doscom.org</a>. Ada hadiah untuk kamu ( :</h1>
</div>

{{--@extends('app')--}}

{{--@section('content')--}}
{{--<div class="container-fluid">--}}
	{{--<div class="row">--}}
		{{--<div class="col-md-8 col-md-offset-2">--}}
			{{--<div class="panel panel-default">--}}
				{{--<div class="panel-heading">Register</div>--}}
				{{--<div class="panel-body">--}}
					{{--@if (count($errors) > 0)--}}
						{{--<div class="alert alert-danger">--}}
							{{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}
							{{--<ul>--}}
								{{--@foreach ($errors->all() as $error)--}}
									{{--<li>{{ $error }}</li>--}}
								{{--@endforeach--}}
							{{--</ul>--}}
						{{--</div>--}}
					{{--@endif--}}

					{{--<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">--}}
						{{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}

						{{--<div class="form-group">--}}
							{{--<label class="col-md-4 control-label">Name</label>--}}
							{{--<div class="col-md-6">--}}
								{{--<input type="text" class="form-control" name="name" value="{{ old('name') }}" required="required">--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="form-group">--}}
							{{--<label class="col-md-4 control-label">User Name</label>--}}
							{{--<div class="col-md-6">--}}
								{{--<input type="text" class="form-control" name="username" value="{{ old('username') }}" required="required">--}}
							{{--</div>--}}
						{{--</div>--}}
						{{--<div class="form-group">--}}
							{{--<label class="col-md-4 control-label">E-Mail Address</label>--}}
							{{--<div class="col-md-6">--}}
								{{--<input type="email" class="form-control" name="email" value="{{ old('email')  }} "  required="required">--}}
							{{--</div>--}}
						{{--</div>--}}

						{{--<div class="form-group">--}}
							{{--<label class="col-md-4 control-label">Password</label>--}}
							{{--<div class="col-md-6">--}}
								{{--<input type="password" class="form-control" name="password" required="required">--}}
							{{--</div>--}}
						{{--</div>--}}

						{{--<div class="form-group">--}}
							{{--<label class="col-md-4 control-label">Confirm Password</label>--}}
							{{--<div class="col-md-6">--}}
								{{--<input type="password" class="form-control" name="password_confirmation" required="required">--}}
							{{--</div>--}}
						{{--</div>--}}

						{{--<div class="form-group">--}}
							{{--<div class="col-md-6 col-md-offset-4">--}}
								{{--<button type="submit" class="btn btn-primary">--}}
									{{--Register--}}
								{{--</button>--}}
							{{--</div>--}}
						{{--</div>--}}
					{{--</form>--}}
				{{--</div>--}}
			{{--</div>--}}
		{{--</div>--}}
	{{--</div>--}}
{{--</div>--}}
{{--@endsection--}}
	@endsection
