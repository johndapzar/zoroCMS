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
							<th class="col-md-4">Category Name</th>
							<th class="col-md-5">Created at</th>
							<th class="Col-md-2"></th>
								
					    	
						</tr>
					</thead>
					<tbody>
						@foreach($categories as $category)
						<tr>
							<td>{{$index++}}</td>
							<td>{{$category->name}}</td>
							<td>{{date('dS F, Y h:iA', strtotime($category->created_at))}}</td>
							<td>
								{!! Form::open(array('url'=>route('category.destroy', array($category->id)),'method'=>'delete')) !!}
									<?php if($category->id == $categoryById->id){ ?>
										<a href="{{route('category.edit', array($category->id))}}" class="btn btn-xs btn-success tooltip-top disabled" title="Edit Category"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
									<?php } else { ?>
										<a href="{{route('category.edit', array($category->id), 'page='.$categories->currentPage())}}" class="btn btn-xs btn-success tooltip-top" title="Edit Category"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
									<?php } ?>
									<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove Category" value="{{$category->id}}"><i class="glyphicon glyphicon-trash"></i></button>
					    		{!! Form::close() !!}
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		{!! $categories !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Edit Category</div>
					<div class="panel-body">
						{!! Form::model($categoryById, ['route'=>['category.update', $categoryById->id], 'method'=>'patch', 'class'=>'form-horizontal']) !!}
							<div class="form-group">
								<div class="col-md-4">
									{!! Form::label('name', 'Name', array('class'=>'control-label')) !!}
								</div>
								<div class="col-md-8">
									{!! Form::text('name', Request::old('name'),array('class'=>'form-control input-sm')) !!}
									@if($errors->has('name'))
											<p class="help-block"><span class="text-danger">{{$errors->first('name')}}</span></p>
									@endif
								</div>						
							</div>
								<div class="form-group">
									<div class="col-md-4"></div>
									<div class="col-md-8">
										<button type="submit" name="submit" class="btn btn-success btn-sm">{!!'Save'!!}</button>
										<button href="{{route('category.index') }}" class="btn btn-primary btn-sm"><?php echo 'Cancel' ?></button>
									</div>
								</div>
						{!! Form::close() !!}
					</div>
			</div>
		</div>
	</div>
</div>
@endsection
