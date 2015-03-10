<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Album;
class AlbumController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$albumAll = Album::orderBy('name')->paginate();
		$index = $albumAll->perPage() * ($albumAll->currentPage()-1) + 1;
		return View('album.index')->with(['albumAll'=>$albumAll,'index'=>$index]);
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
		$rules	= ['name' 	=> 'required'];
		$this->validate($request, $rules);
		/*$validator	= Validator::make(['name'=>'required'],['cover'=>'required']);
		if($validator->fails()){
			return redirect()->back()->withErrors($validator->errors());
		}*/
		$input 	= $request->all();//Request::all();
		$album 	= New Album();
		if($request->hasFile('cover')){
			$destinationPath = "upload/";
			$extension = $request->file('cover')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('cover')->move($destinationPath, $fileName);
			$album->cover	= $fileName;
		}

		$album->name 	= $input['name'];
		$album->save();

		return redirect('album');

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
		$albumById	= Album::find($id);
		$albumAll = Album::orderBy('name')->paginate();
		$index = $albumAll->perPage() * ($albumAll->currentPage()-1) + 1;
		return View('album.edit')->with(['albumAll'=>$albumAll,'index'=>$index,'albumById'=>$albumById]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name' 	=> 'required'];
		$this->validate($request, $rules);

		$input 	= $request->all();
		$album 	= Album::find($id);

		if($request->hasFile('cover')){
			$destinationPath = "upload/";
			$extension = $request->file('cover')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('cover')->move($destinationPath, $fileName);
			$album->cover	= $fileName;
		}

		$album->name 	= $input['name'];
		$album->save();

		return redirect('album');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Album::destroy($id);
		return redirect('album');
	}

}
