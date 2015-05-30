@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h1 style="text-align:center; margin-top: 40px; padding-right: 100px;">
                        {{ $mission->title }}
                    </h1>
                    {{--<h4 style="text-align: right">{{ \App\User::find($article->user_id)->name }}</h4>--}}

                    <hr>
                    {{--<div id="date" style="text-align: right;">--}}
                        {{--{{ $article->updated_at }}--}}
                    {{--</div>--}}

                    <h4>Mission Overview</h4>
                    <div class="panel panel-default" style="padding: 50px 20px;">
                        <p style="font-size: medium">
                            {{ $mission->body }}
                        </p>
                    </div>
                    <hr>
                    <h4>Platform</h4>
                    <div class="panel panel-default" style="padding: 20px 20px;">
                        <p style="font-size: medium">
                            {{ $mission->platform }}
                        </p>
                    </div>
                    @if ($count <= 0)
                    <form action="{{ URL('missions/register') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="mission_id" value="{{ $mission->id }}">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="b_submit" value="{{ false }}">

                        <button type="submit" class="btn btn-success col-md-12">Register for this Mission</button>
                    </form>
                    @else
                        <form action="{{ URL('missions/submit/'.$mission->id) }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" name="mission_id" value="{{ $mission->id }}">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="b_submit" value="{{ false }}">

                            <button type="submit" class="btn btn-primary col-md-12">Submit for this Mission</button>
                        </form>
                    @endif

                </div>

                <div class="col-md-3">

                    <div class="panel panel-default" style="margin-top: 50px;">
                        <div class="panel-body" style="text-align: center; min-height: 250px;">
                            <h2 style="font-size: 80px;">米</h2>
                            <h2 style="font-size: 100px;">{{ $mission->prize }}</h2>

                        </div>
                    </div>
                    <div class="panel panel-default" style="margin-top: 20px;">
                        <div class="panel-heading"><h4>about</h4></div>
                        <div class="panel-body" style="color: green">
                            DOWNLOADS:
                            <p style="color: #000000; padding-top: 10px;">NONE</p>
                        </div>
                        <hr>
                        <div class="panel-body" style="color: green">
                            LINKS:
                            <a href="{{ URL('/missions/chat/'.$mission->id) }}"> <p style="padding-top: 10px;">Discuss</p></a>

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
@endsection
