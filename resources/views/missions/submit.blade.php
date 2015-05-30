@extends('layouts.master')
@section('content')
    <div class="content">
        <div class="container">
            <a href="{{ URL('/missions/'.$mission->id) }}" style="color: #000000">
                <h1 style="text-align:center; margin-top: 20px; padding-right: 70px;">
                    {{ $mission->title }}
                </h1>
            </a>
            <div class="row">
                <div class="col-md-10">
                    <form action="{{ URL('/') }}" method="post" enctype="multipart/form-data">
                        <label for="file" style="font-size: 30px;">Filename:</label>
                        <input type="file" name="file" id="file">
                        <br>
                        {{--<input type="submit" name="submit" value="Submit">--}}
                        <button class="btn btn-lg btn-info col-md-12">Submit</button>

                    </form>

                </div>
            </div>


        </div>
    </div>
@endsection