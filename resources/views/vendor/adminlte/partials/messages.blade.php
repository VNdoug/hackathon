@if ($errors->any())
	<ul class="alert alert-danger alert-dismissable list-none">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		@foreach ($errors->all() as $error)
			<li><i class="fa fa-exclamation-circle"></i> {{ $error }}</li>
		@endforeach
	</ul>
@endif

@if(Session::get('success'))
	<div class="alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<i class="icon fa fa-check"></i>
		{{Session::get('success')}}
	</div>
@endif

@if(Session::get('warning'))
	<div class="alert alert-warning alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<i class="icon fa fa-warning"></i>
		{{Session::get('success')}}
	</div>
@endif
