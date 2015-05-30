@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container">
            <a href="{{ URL('/missions/'.$mission->id) }}" style="color: #000000">
            <h1 style="text-align:center; margin-top: 20px; padding-right: 70px;">
                {{ $mission->title }}
            </h1>
            </a>
            <div id="comments" style="margin-bottom: 100px;">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="comments" style="margin-top: 100px;">
                    @foreach ($mission->hasManyComments as $comment)
                        <div class="one" style="border-top: solid 20px #efefef; padding: 5px 20px;">
                            <div class="nickname" data="{{ $comment->nickname }}">
                                {{--@if ($mission->user_id == (Auth::user()->id))--}}
                                    {{--<h3 style="color: orangered">{{ $comment->nickname }}</h3>--}}
                                {{--@else--}}
                                    <h3>{{ $comment->nickname }}</h3>
                                {{--@endif--}}
                                <h6>{{ $comment->created_at }}</h6>
                            </div>
                            <div class="text-left">
                                <p>
                                    {{ $comment->content }}
                                </p>
                            </div>
                        </div>

                    @endforeach
                    <div class="one" style="border-top: solid 20px #efefef; padding: 10px 20px;"></div>
                </div>
                <div id="new">
                    <form action="{{ URL('comment/store') }}" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="page_id" value="{{ $mission->id }}">
                        <input type="hidden" name="nickname" value="{{ Auth::user()->name }}">
                        {{--<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">--}}
                        {{--<div class="form-group">--}}
                        {{--<label>Nickname</label>--}}
                        {{--<input type="text" name="nickname" class="form-control" style="width: 300px;"--}}
                        {{--required="required">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<label>Email address</label>--}}
                        {{--<input type="email" name="email" class="form-control" style="width: 300px;">--}}
                        {{--</div>--}}
                        {{--<div class="form-group">--}}
                        {{--<label>Home page</label>--}}
                        {{--<input type="text" name="website" class="form-control" style="width: 300px;">--}}
                        {{--</div>--}}
                        <div class="form-group">
                            <label>Content</label>
                        <textarea name="content" id="newFormContent" class="form-control" rows="10"
                                  required="required"></textarea>
                        </div>
                        <button type="submit" class="btn btn-lg btn-success col-lg-12">Submit</button>
                    </form>
                </div>


            </div>
        </div>
    </div>
@endsection