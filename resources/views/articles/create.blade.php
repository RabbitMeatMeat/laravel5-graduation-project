
@extends('layouts.master')
@section('content')
    <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-01 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">New Mission</div>
                    <div class="panel-body">
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="{{ URL('articles') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <input placeholder="title" type="text" name="title" class="form-control" required="required">
                            <br>
                            <textarea placeholder="Mission Overiew" name="body" row="10" class="form-control" required="required"></textarea>
                            <br>
                            <button class="btn btn-lg btn-info">New Mission</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection