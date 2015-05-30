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
                            <form action="{{ URL('missions') }}" method="POST">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <label>title</label>
                                <input placeholder="title" type="text" name="title" class="form-control"
                                       required="required">
                                <br>
                                <label>Mission Overview</label>
                                <textarea placeholder="Mission Overview" name="body" row="20" class="form-control"
                                          required="required" style="min-height: 150px;"></textarea>
                                <br>
                                <label>Prize</label>
                                <input placeholder="prize" type="number" name="prize" class="form-control"
                                       required="required">
                                <br>
                                <label>StartTime</label>
                                <div class="">
                                <input name="start_year" title="Year" type="text"/> YYYY
                                <input name="start_month" title="Month" type="text" value="4"/> MM
                                <input name="start_day" title="Day" type="text" value="11"/> DD
                                <input title="Hour" name="start_hour" type="text" value="11"/> HH
                                <input title="Minute" name="start_minute" type="text" value="0"/> MM
                                </div>

                                <br>
                                <label>EndTime</label>
                                <div class="">
                                    <input name="end_year" title="Year" type="text"/> YYYY
                                    <input name="end_month" title="Month" type="text" value="4"/> MM
                                    <input name="end_day" title="Day" type="text" value="11"/> DD
                                    <input title="Hour" name="end_hour" type="text" value="11"/> HH
                                    <input title="Minute" name="end_minute" type="text" value="0"/> MM
                                </div>

                                <br>
                                <label>Platform</label>
                                <input placeholder="platform" type="text" name="platform" class="form-control"
                                       required="required">
                                <br>
                                <button class="btn btn-lg btn-info col-md-12">New Mission</button>


                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection