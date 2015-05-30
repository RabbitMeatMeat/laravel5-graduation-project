@extends('layouts.master')

@section('content')

    <div class="content">
        <div class="container">
            <h1>Mission</h1>


            <div class="row">
                <div class="col-md-9 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body" data-example-id="hoverable-table" style="padding-top: 30px;">
                            <table class="table table-hover">
                                <thead class="first-cell">
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Prize</th>
                                    <th>StartTime</th>
                                    <th>EndTime</th>
                                    <th>Platform</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($missions as $mission)
                                    <tr class="second-cell">
                                        <td><a href="{{ URL('missions/'.$mission->id) }}">{{ $mission->title }}</a></td>
                                        <td style="padding-left: 5px;">
                                            <p style="color: #000000">{{ $mission->stauts }}</p>
                                            @if ($mission->status)
                                                <p style="color: green">Runing</p>
                                            @else
                                                <p style="color: #4183c4">Pending</p>
                                            @endif
                                        </td>
                                        <td>{{ $mission->prize }}</td>
                                        <td>{{ $mission->start_time }}</td>
                                        <td>{{ $mission->end_time }}</td>
                                        <td>{{ $mission->platform }}</td>
                                        {{--<td>{{ \App\User::find($mission->user_id)->name }}</td>--}}
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php echo $missions->render() ?>
                </div>

            </div>
        </div>
@endsection
