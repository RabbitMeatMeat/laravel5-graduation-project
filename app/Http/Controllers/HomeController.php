<?php namespace App\Http\Controllers;

use App\Mission;
use App\Page;
class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
        /*
         * 渲染 learnlaravel5/resources/views/home.blade.php
         * 视图文件把变量 $pages 传进视图，$pages = Page::all()
         * Page::all() 调用的是 Eloquent 中的 all() 方法，返回 pages 表中的所有数据。
         */

		//return view('home')->withPages(Page::all());
      //  return view('home');
        $result = Mission::where('id','>','0')->orderBy('created_at', 'desc');
        $missions = $result->paginate(10)->setPath(URL('/home'));
        return view('home')->withMissions($missions);
	  //  return view('home')->withArticles(Article::where('id','>',0)->paginate(10));
    }
    public function help()
    {
        return view('help');
    }
}
