@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 ">
				<div class="panel-heading">New Category</div>
					<div class="panel-body">

<!-- 						{!!Form::open(array('route'=>'category.store', 'class'=>'form-horizontal'))!!}
 -->							<div class="form-group">
								<div class="col-md-4">
									{!! Form::label('name', 'Name', array('class'=>'control-label')) !!}
								</div>
								<div class="col-md-8">
									{!! Form::text('name', '',array('class'=>'form-control input-sm')) !!}
									@if($errors->has('name'))
											<p class="help-block"><span class="text-danger">{{$errors->first('name')}}</span></p>
									@endif
								</div>						
							</div>

							<div class="col-md-12m pull-right">
								<button type="submit" name="submit" class="btn btn-success btn-sm">{!!'Submit'!!}</button>
							</div>
						{!!Form::close()!!}
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
