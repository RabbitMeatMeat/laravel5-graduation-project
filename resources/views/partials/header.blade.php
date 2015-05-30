<div class="navbar-header">
    <nav class="nav navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapse" data-toggle="collapse" data-target="#navbar">
                    <span class="sr-only">navigation switch</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ URL('/') }}">
                    <img alt="Brand" src="{{ URL('/img/bestcoder.png') }}">
                </a>

            </div>

            <div class="collapse navbar-collapse" id="navbar">
                <ul class="nav navbar-nav navbar-left">
                    <li><a href="{{ URL('/home') }}">Mission</a></li>
                    <li><a href="{{ URL('/help') }}">Help</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{ URL('/missions/create') }}" class="btn btn-default btn-lg" role="button">Create
                            Mission</a></li>

                    <li role="presentation" class="dropdown">
                        <div class="btn-group btn-lg">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                               aria-expanded="false">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">

                                {{--<li>user: {{ Auth::User()->name }}</li>--}}
                                <li><a href="{{ URL('#') }}"><span class="glyphicon glyphicon-user" aria-hidden="true">
                                             {{ Auth::user()->name }}</span></a></li>

                                <li><a href="{{ URL('/missions/show/auth') }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true">
                                             MyMissions</span></a></li>
                                <li><a href="{{ URL('/') }}"><span class="glyphicon glyphicon-cog" aria-hidden="true">
                                            Seetings</span></a></li>
                                <li><a href="{{ URL('/auth/logout') }}"><span
                                                class="glyphicon glyphicon-log-out" aria-hidden="true"> Logout</span>
                                    </a></li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

</div>



