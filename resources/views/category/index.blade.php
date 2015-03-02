@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 ">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>
					<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="col-md-1">#</th>
							<th class="col-md-5">Category Name</th>
							<th class="col-md-5">Created at</th>
							<th class="col-md-1"></th>
						</tr>
					</thead>
					<tbody>
						<?php $i=1; ?>
						@foreach($categories as $category)
						<tr>
							<td>{{$i++}}</td>
							<td>{{$category->name}}</td>
							<td>{{date('dS F, Y h:iA', strtotime($category->created_at))}}</td>
							<td>
								
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">New Category</div>
					<div class="panel-body">

						{!!Form::open(array('route'=>'category.store', 'method'=>'put', 'class'=>'form-horizontal'))!!}
							<div class="form-group">
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
								<button type="submit" name="submit" class="btn btn-primary btn-sm">{!!'Submit'!!}</button>
							</div>
						{!!Form::close()!!}
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
