<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\GroupCategory;

class GroupCategoryController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$groupcategoryAll	= GroupCategory::orderBy('name')->paginate();
		$index = $groupcategoryAll->perPage() * ($groupcategoryAll->currentPage()-1) + 1;

		return view('groupcategory.index',compact('groupcategoryAll','index')); 
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
		$rules	= ['name'=>'required'];
		$this->validate($request, $rules);

		GroupCategory::create($request->except('_token'));

		return redirect('groupcategory');
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
		$groupcategoryAll	= GroupCategory::orderBy('name')->paginate();
		$groupcategoryById	= GroupCategory::find($id);
		$index = $groupcategoryAll->perPage() * ($groupcategoryAll->currentPage()-1) + 1;

		return view('groupcategory.edit',compact('groupcategoryAll','groupcategoryById','index'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$rules	= ['name'=>'required'];
		$this->validate($request, $rules);

		$groupcategory = GroupCategory::find($id);
		$groupcategory->update($request->except('_token'));

		return redirect('groupcategory');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		GroupCategory::destroy($id);
		return redirect('groupcategory');
	}

}
