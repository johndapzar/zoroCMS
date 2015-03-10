<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use Request;
use App\Category;

class postController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts=Post::orderBy('id', 'asc')->paginate();
		$index = $posts->perPage() * ($posts->currentPage()-1) + 1;
		return view('post.index')
			->With(['posts'=>$posts, 'index'=>$index]);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$categories = Category::orderBy('id','asc')
			->get()
			->lists('name','id');
		
		return view('post.create')
			->With([ 'categories'=>$categories]);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			$input 	= Request::all();
			$category = new Post;
			$category->title =$input['title'];
			$category->body =$input['body'];
			$category->save();
			
			return Redirect('post');
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
		$postById = Post::find($id);
		$categories = Category::orderBy('id','asc')
			->get()
			->lists('name','id');

		
		return view('post.edit')
			->With([ 
				'categories'=>$categories,
				'postById'=>$postById]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
			$input 	= Request::all();
			$post=Post::find($id);
			$post->title =$input['title'];
			$post->body =$input['body'];
			$post->save();
			
			return Redirect('post');
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

		return Redirect('post');
	}

}
