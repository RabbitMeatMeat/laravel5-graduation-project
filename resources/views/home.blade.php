@extends('layouts.master')

@section('content')

    <div class="content">
        <div class="container">
            <h1>Mission</h1>


            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-body" data-example-id="hoverable-table" style="padding-top: 30px;">
                            <table class="table table-hover">
                                <thead class="first-cell">
                                <tr>
                                    <th>Title</th>
                                    <th>Status</th>
                                    <th>Prize</th>
                                    <th>From</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr class="second-cell">
                                        <td><a href="{{ URL('articles/'.$article->id) }}">{{ $article->title }}</a></td>
                                        <td style="color: green; padding-left: 5px;">Runing</td>
                                        <td>$100</td>
                                        <td>{{ \App\User::find($article->user_id)->name }}</td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <?php echo $articles->render() ?>
                </div>

            </div>
        </div>
@endsection
