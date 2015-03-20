<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Category;
use App\Post;

class PostController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$postAll	= Post::orderBy('title')->paginate();
		$index = $postAll->perPage() * ($postAll->currentPage()-1) + 1;

		return view('post.index',compact('postAll','index')); 
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categoryAll	= Category::orderBy('name')->lists('name','id');
		return view('post.create',compact('categoryAll')); 
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
			'body'	=> 'required',
			'category_id' => 'required',
		];
		$this->validate($request, $rules);

		$request->user_id = '1';
		Post::create($request->except('_token'));

		return redirect('post');
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
		$postById		= post::find($id);
		$categoryAll	= Category::orderBy('name')->lists('name','id');
		return view('post.edit',compact('postById','categoryAll')); 
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules = [
			'title'	=> 'required',
			'body'	=> 'required',
			'category_id' => 'required',
		];
		$this->validate($request, $rules);

		$post = Post::find($id);
		$post->update($request->except('_token'));

		return redirect('post');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);
		return redirect('post');
	}

}
