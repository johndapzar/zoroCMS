<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\GroupPost;
use App\Album;
use App\Photo;

class GroupController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function group1()
	{
		$group1	= GroupPost::where('category_id','=',3)->orderBy('created_at','desc')->limit(4)->get();
		$groupnews	= GroupPost::where('category_id','=',2)->orderBy('created_at','desc')->limit(4)->get();
		$groupprog	= GroupPost::where('category_id','=',1)->orderBy('created_at','desc')->limit(4)->get();

		

		return view('group.group1',compact('group1','groupnews','groupprog'));
	}

	public function group2()
	{
		$group2	= GroupPost::where('category_id','=',6)->orderBy('created_at','desc')->limit(4)->get();
		return view('group.group2',compact('group2'));
	}
	public function group3()
	{
		$group3	= GroupPost::where('category_id','=',7)->orderBy('created_at','desc')->limit(4)->get();
		return view('group.group3',compact('group3'));
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
		//
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
		//
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
