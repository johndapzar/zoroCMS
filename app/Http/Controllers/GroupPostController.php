<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\GroupCategory;
use App\GroupPost;

class GroupPostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$grouppostAll	= GroupPost::orderBy('title')->paginate();
		$index = $grouppostAll->perPage() * ($grouppostAll->currentPage()-1) + 1;

		return view('grouppost.index',compact('grouppostAll','index')); 
		}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$groupcategoryAll	= GroupCategory::orderBy('name')->lists('name','id');
		return view('grouppost.create',compact('groupcategoryAll')); 
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		$rules = [
			'title'	=> 'required',
			'category_id' => 'required',
		];
		$this->validate($request, $rules);

		$grouppost = New GroupPost();
		if($request->hasFile('icon')){
			$extension = $request->file('icon')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('icon')->move('upload/post_icon/', $fileName);
			$grouppost->icon	= '/upload/post_icon/'.$fileName;
		}
		$grouppost->category_id = $request['category_id'];
		$grouppost->user_id = \Auth::user()->id;
		$grouppost->title = $request['title'];
		$grouppost->body = $request['body'];
		$grouppost->highlight = $request['highlight'];
		$grouppost->download = $request['download'];
		$grouppost->save();

		return redirect('grouppost');
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
		$grouppostById		= Grouppost::find($id);
		$groupcategoryAll	= GroupCategory::orderBy('name')->lists('name','id');
		return view('grouppost.edit',compact('grouppostById','groupcategoryAll')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, request $request)
	{
		$rules = [
			'title'	=> 'required',
			'category_id' => 'required',
		];
		$this->validate($request, $rules);

		$grouppost = GroupPost::find($id);
		if($request->hasFile('icon')){
			$extension = $request->file('icon')->getClientOriginalExtension();
			$fileName = "_".uniqid().".".$extension;
			$request->file('icon')->move('upload/post_icon/', $fileName);
			$grouppost->icon	= '/upload/post_icon/'.$fileName;
		}
		$grouppost->category_id = $request['category_id'];
		$grouppost->user_id = \Auth::user()->id;
		$grouppost->title = $request['title'];
		$grouppost->body = $request['body'];
		$grouppost->highlight = $request['highlight'];
		$grouppost->download = $request['download'];
		$grouppost->save();
		//$post->update($request->except('_token'));

		return redirect('grouppost');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		GroupPost::destroy($id);
		return redirect('grouppost');
	}

}
