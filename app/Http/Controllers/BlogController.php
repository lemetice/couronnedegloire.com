<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Libraries\Utility;

use DB;
use Input;
use App\Tag;
use Session;
use App\Article;
use Carbon\Carbon;

class BlogController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		$tags = Tag::lists('name', 'id');
		$articles = DB::table('articles')->get();
		//dd(Article::first());
		return view('blog', compact('tags', 'articles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{	
		$tags = Tag::lists('name', 'id');
		
		return view('articles.create', compact('tags'));
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
		$article = DB::table('articles')->where('slug','=',$id)->get();
		
        if(empty($article))
            return view('errors.404');
        else
        return view('articles.show', compact('article'));
	}

	/**
	 * Display all articles with specified tag.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function showArticlesWithtag($tag)
	{
		$articles = Tag::find(1)->articles;
		dd($tag);
        if(empty($articles))
            return view('errors.404');
        else
        return view('articles.articles-by-tag', compact('articles','tag'));
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
