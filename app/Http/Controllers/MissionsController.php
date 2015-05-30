<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use App\Mission;
use App\MissionRegister;
use Redirect, Input, Auth;
class MissionsController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

    public function register() {
        $mission_id = Input::get('mission_id');
        $user_id = Input::get('user_id');
        $count = MissionRegister::where('mission_id',$mission_id)->where('user_id',$user_id)->count();
        if ($count <= 0) {
            $missionRegister = new MissionRegister();
            $missionRegister->mission_id = Input::get('mission_id');
            $missionRegister->user_id = Input::get('user_id');
            $missionRegister->b_submit = Input::get('b_submit');
            if ($missionRegister->save()) {
//                return Redirect::to(URL('/fdf'));
                return Redirect::to(URL('/missions/'.Input::get('mission_id')));
            } else {
                return Redirect::back()->withInput()->withErrors('注册失败！');
            }
        } else {
//            return Redirect::to(URL('/fddd'));
            return Redirect::back()->withInput()->withErrors('已经注册过！');
        }
    }


    public function chat($id) {
        return view('missions.chat')->withMission(Mission::find($id));
    }

    public function showAuth()
    {
        return view('missions.showAuth')->withMissions(Mission::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get());
    }

    public function submit($id) {
        return view('missions.submit')->withMission(Mission::find($id));
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
        $this->validate($request,[
            'title' => 'required|unique:pages|max:255',
            'body' => 'required',
        ]);

        $mission = new Mission();
        $mission->title = Input::get('title');
        $mission->body = Input::get('body');
        $mission->user_id = Auth::user()->id;
        $mission->prize = Input::get('prize');
        $mission->platform = Input::get('platform');
        $mission->start_time = new \DateTime();
        $mission->start_time->setDate(Input::get('start_year'),Input::get('start_month'),Input::get('start_day'));
        $mission->start_time->setTime(Input::get('start_hour'),Input::get('start_minute'));

        $mission->end_time = new \DateTime();
        $mission->end_time->setDate(Input::get('end_year'),Input::get('end_month'),Input::get('end_day'));
        $mission->end_time->setTime(Input::get('end_hour'),Input::get('end_minute'));

        $nowTime = new \DateTime('now');
        if ($mission->start_time->getTimestamp() < $nowTime->getTimestamp() ) $mission->status = true;
        else $mission->status = false;

        if ($mission->save()) {
            return Redirect::to(URL('/'));
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
       // return view('home');
        $count = MissionRegister::where('mission_id',$id)->where('user_id',Auth::user()->id)->count();
        $mission = Mission::find($id);

//        $nowTime = new \DateTime('now');
//        if ($mission->start_time->getTimestamp() < $nowTime->getTimestamp() ) $mission->status = true;
//        else $mission->status = false;
//
//        $mission->save();

        return view('missions.show',['count' => $count, 'mission' => $mission]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
        return view('missions.edit')->withMission(Mission::find($id));

    }

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Request $request, $id)
	{
        $this->validate($request, [
            'title' => 'required|unique:pages,title,'.$id.'|max:255',
            'body' => 'required',
        ]);

        $mission = Mission::find($id);
        $mission->title = Input::get('title');
        $mission->body = Input::get('body');
        $mission->user_id = Auth::user()->id;
        $mission->prize = Input::get('prize');
//        $mission->start_time = new DateTime(2007,1,1,21,21,21);
//        $mission->end_time = new \DateTime(2008,1,1,21,21,21);


        if ($mission->save()) {
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
        $article = Mission::find($id);
        $article->Mission();

        return Redirect::to('/missions/show/auth');
	}




}
