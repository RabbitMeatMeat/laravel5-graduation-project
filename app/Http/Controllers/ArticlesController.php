<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\User;
use Illuminate\Http\Request;
use App\Article;
use Redirect, Input, Auth;
class ArticlesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('missions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        /*
        * 表单验证
        * 详见：http://www.golaravel.com/laravel/docs/5.0/validation/
        */
        $this->validate($request,[
            'title' => 'required|unique:pages|max:255',
            'body' => 'required',
        ]);

        $article = new Article();
        $article->title = Input::get('title');
        $article->body = Input::get('body');
        $article->user_id = Auth::user()->id;

        if ($article->save()) {
            return Redirect::to('/');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
       // return view('missions.show');
		return view('missions.show')->withArticle(Article::find($id));
	}
    public function showAuth()
    {
        return view('missions.showAuth')->withArticles(Article::where('user_id', Auth::user()->id)->orderBy('created_at',desc)->get());
    }
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		return view('missions.edit')->withArticle(Article::find($id));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request,$id)
	{
        $this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);

        $article = Article::find($id);
        $article->title = Input::get('title');
        $article->body = Input::get('body');
        $article->user_id = Auth::user()->id;

        if ($article->save()) {
            return Redirect::to('/missions/show/auth');
        } else {
            return Redirect::back()->withInput()->withErrors('保存失败！');
        }
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$article = Article::find($id);
        $article->delete();

        return Redirect::to('/missions/show/auth');
	}

}
