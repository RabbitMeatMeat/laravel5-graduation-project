@extends('layouts.master')

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Your Mission</div>
                        <div class="panel-body">
                            @foreach($articles as $article)
                                <div class="title">
                                    <a href="{{ URL('articles/'.$article->id) }}">
                                        <h4>{{ $article->title }}</h4>

                                    </a>

                                    <div class="content">
                                        <p>
                                            {{ $article->body }}
                                        </p>
                                    </div>
                                </div>
                                <a href="{{ URL('articles/'.$article->id.'/edit') }}" class="btn btn-success">Edit</a>

                                <form action="{{ URL('articles/'.$article->id) }}" method="post"
                                      style="display: inline">
                                    <input name="_method" type="hidden" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <button type="submit" class="btn btn-danger">delete</button>
                                </form>
                                <hr>
                            @endforeach


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
