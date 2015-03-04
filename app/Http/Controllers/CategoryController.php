<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Category;


class CategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$categories=Category::orderBy('id', 'asc')->paginate();
		$index = $categories->perPage() * ($categories->currentPage()-1) + 1;
		return view('category.index')
			->With(['categories'=>$categories, 'index'=>$index]);
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
	public function store()
	{
		

			$input 	= Request::all();
			$category = new Category;
			$category->name =$input['name'];
			$category->save();
			
			return Redirect('category');
		
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
		$categoryById = Category::find($id);
		$categories=Category::orderBy('id', 'asc')->paginate();
		$index = $categories->perPage() * ($categories->currentPage()-1) + 1;
		return view('category.edit')
			->With(['categories'=>$categories, 'index'=>$index, 'categoryById' =>$categoryById]);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input 	=Request::all();
		$category =Category::find($id);
		$category->name	= $input['name'];
		$category->save();

			return Redirect('category');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Category::destroy($id);

		return Redirect('category');
	}

}
