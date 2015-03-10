@extends('app')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">List Photo</div>
				<div class="panel-body">
					<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-hover" style="margin-bottom:0px;">
					<thead>
					  <tr>
					    <th height="38" align="center">#</th>
					    <th height="38" align="left">Caption</th>
					    <th height="38" align="left">Album</th>
					    <th height="38" align="left">Photo</th>
					    <th align="left" class="action text-center">Control</th>
					  </tr>
					  </thead>
					  <tbody>
					@foreach($photoAll as $photo)
						<tr bgcolor="">
					    <td height="25" align="center">{{ $index++ }}</td>
					    <td height="25" align="left">{{ $photo->caption }}&nbsp;</td>
					    <td height="25" align="left" bgcolor="">{{ $photo->album->name }}&nbsp;</td>
					    <td height="25" align="left" bgcolor="">{{ $photo->file }}&nbsp;</td>
					    <td align="left" class="action text-center">
					    	{!! Form::open(array('url'=>route('photo.destroy', array($photo->id)),'method'=>'delete')) !!}
								<a href="{{route('photo.edit', array($photo->id))}}" class="btn btn-xs btn-success tooltip-top" title="Edit prod"><i class="glyphicon glyphicon-edit"></i></a>&nbsp;&nbsp;
								<button type="submit" onclick="return confirm ('<?php echo ('Are you sure') ?>');" name="id" class="btn btn-xs btn-danger tooltip-top" title="Remove photo" value="{{$photo->id}}"><i class="glyphicon glyphicon-trash"></i></button>
							{!!Form::close() !!}
					    </td>
					    </tr>
					    
					@endforeach
					</tbody>
					</table>
				</div>
			</div>
			{!! $photoAll !!}
		</div>
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">Add Photo</div>
				<div class="panel-body">
					{!! Form::open(['route'=>'photo.store','class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
						<div class="form-group">
							{!! Form::label('Album','',['class'=>'col-md-3 control-label'])!!}
							<div class="col-md-9">
								{!! Form::select('album_id',$albumAll,'',['class'=>'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('Caption','',['class'=>'col-md-3 control-label'])!!}
							<div class="col-md-9">
								{!! Form::text('caption',null,['class'=>'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							{!! Form::label('Photo','',['class'=>'col-md-3 control-label']) !!}
							<div class="col-md-9">
								{!! Form::file('file',['class'=>'form-control']) !!}
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-9 col-md-offset-3">
								<button type="submit" class="btn btn-success">
									Save
								</button>
							</div>
						</div>
					{!! Form::close() !!}

					@if($errors->any())
						<ul class="alert alert-danger">
							@foreach($errors->all() as $error)
								<li>{{ $error }}</li>
							@endforeach
						</ul>
					@endif
				</div>
			</div>
		</div>
	</div>
</div>

@endsection