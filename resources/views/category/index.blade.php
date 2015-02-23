@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-1 pull-right">
			<div class="panel panel-default">
				<div class="panel-heading">New Category</div>
					<div class="form-group">
						{{Form::label('name', 'Name', array('class'=>'control-label'))}}
						{{Form::text('name', '', array('class'=>'form-control input-sm'))}}

						
					</div>
		</div>
	</div>
</div>
@endsection
