<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Album;
use App\Photo;

class PhotoController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albumAll	= Album::orderBy('name')->lists('name','id');
		$albumAll	= [''=>'']+$albumAll;
		$photoAll 	= Photo::orderBy('caption')->paginate();
		$index = $photoAll->perPage() * ($photoAll->currentPage()-1) + 1;
		return View('photo.index', compact('albumAll','photoAll','index'));	
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules = [
			'album_id'	=> 'required',
			'caption'	=> 'required'
		];

		$this->validate($request, $rules);

		$input 	= $request->all();//Request::all();
		$photo 	= New Photo();
		if($request->hasFile('file')){
			$destinationPath = "upload/";
			$extension = $request->file('file')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('file')->move($destinationPath, $fileName);
			$photo->file	= $fileName;
		}

		$photo->album_id	= $input['album_id'];
		$photo->caption 	= $input['caption'];
		$photo->save();

		return redirect('photo');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$albumAll	= Album::orderBy('name')->lists('name','id');
		$albumAll	= [''=>'']+$albumAll;
		$photoById	= Photo::find($id);
		$photoAll 	= Photo::orderBy('caption')->paginate();
		$index = $photoAll->perPage() * ($photoAll->currentPage()-1) + 1;
		return View('photo.edit', compact('albumAll','photoAll','photoById','index'));	
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
