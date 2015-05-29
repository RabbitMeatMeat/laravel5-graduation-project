@extends('layouts.default')

@section('content')
    <div class="login">
        <div class="container">
            @if (count($errors) > 0)
                <div class="waring-block">

                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach

                </div>
            @endif
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <p>Log In</p>
                            <hr>
                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <input placeholder="E-Mail Address" type="email" class="form-control" name="email"
                                               value="{{ old('email') }}">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-md-8 col-md-offset-2">
                                        <input placeholder="password" type="password" class="form-control" name="password" value="password">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button type="submit" class="btn btn-success col-md-12">Login</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3 col-md-offset-2">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>

                                    </div>
                                    <div class="col-md-1 col-md-offset-1">
                                        <a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your
                                            Password?</a>

                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container text-center">
            <p>Don't have an account ? <a href="{{ URL('/auth/register') }}">Sign Up</a></p>
        </div>
    </div>
@endsection
