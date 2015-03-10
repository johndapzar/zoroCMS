@extends('app')

@section('content')
<div class="container">
	<div class="row align-center">
		 <div class="col-md-2"> &nbsp;</div>
			<div class="col-md-8">
				<div class="panel panel-default" >
					<div class="panel-heading" ><h4 class="text-center">Edit Post</h4></div>
						<div class="panel-body">
								{!! Form::model($postById,['route'=>['post.update', $postById->id], 'method'=>'patch', 'class'=>'form-horizontal']) !!}

								<div class="col-md-12">
									{!! Form::label('category', 'Category', array('class'=>'control-label')) !!}
									{!! Form::select('category', $categories,$postById->category_id,array('class' =>'input-sm form-control')) !!}
									@if($errors->has('category'))
										<p class="help-block"><span class="text-danger">{{$errors->first('category')}}</span></p>
									@endif
								</div>	
								<div class="col-md-12">
									{!! Form::label('title', 'Title', array('class'=>'control-label')) !!}
									{!! Form::text('title', Request::old('title'),array('class'=>'form-control input-sm')) !!}
										@if($errors->has('title'))
											<p class="help-block"><span class="text-danger">{{$errors->first('title')}}</span></p>
										@endif
								</div>
								<div class="col-md-12">
									{!! Form::label('body', 'Body', array('class'=>'control-label')) !!}
									{!! Form::textarea('body', Request::old('body'),array('class'=>'input-sm form-control editor','id' =>'editor')) !!}
										@if($errors->has('body'))
											<p class="help-block"><span class="text-danger">{{$errors->first('body')}}</span></p>
										@endif
								</div>
								<div class="col-md-12">&nbsp;</div>
								<div class="col-md-12 text-right">
									<button type="submit" name="submit" class="btn btn-success btn-sm">{!!'Save'!!}</button>
								</div>
							{!!Form::close()!!}
						</div>
				</div>
			</div>
	</div>
</div>
@endsection

@section('scripts')

<script type="text/javascript">
$(function(){
	$('#editor').redactor({
		focus: true,
		minHeight: 200,
	});
});
</script>
@stop
