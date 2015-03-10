@extends('app')

@section('content')
<div class="container">
	<div class="row align-center">
		 <div class="col-md-2"> &nbsp;</div>
<a href="{{route('post.create')}}" class="btn btn-success pull-right">Create</a>
			<div class="col-md-8 ">
				<div class="panel panel-default">
					<div class="panel-heading"><h4 class="text-center">Post</h4>
					
					</div>
						
						<table class="table table-striped table-bordered">
						<thead>
							<tr>
								<th class="col-md-1">#</th>
								<th class="col-md-4">Title</th>
								<th class="Col-md-4">Created at</th>
								<th class="Col-md-3"></th>
							</tr>
						</thead>
						<tbody>
							@foreach($posts as $post)
							<tr>
								<td>{{$index++}}</td>
								<td>{{$post->title}}</td>
								<td>{{date('dS F, Y h:iA', strtotime($post->created_at))}}</td>
								<td>
									{!! Form::open(array('url'=>route('post.destroy', array($post->id)),'method'=>'delete')) !!}
									<a href="{!! route('post.edit', array($post->id)) !!}" class="btn btn-xs btn-success tooltip-top" title="Edit post"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
									<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove Post" value="{{$post->id}}"><i class="glyphicon glyphicon-trash"></i></button>
						    		{!! Form::close() !!}
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				{!! $posts !!}
			</div>
		</div>
</div>
@endsection
