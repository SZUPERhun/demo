@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $article->title }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Author: {{ $article->user()->first()->name }}
                    <article>
                        {{ $article->text }}
                    </article>
                    @if (Auth::user()->admin)
                        <div class="btn-group">
                            <a href="{{ action('ArticlesController@edit', $article->url) }}" type="button" class="btn btn-primary">Edit</a>
                            {{ Form::open(['method' => 'DELETE', 'route' => ['articles.destroy', $article->url]]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
                            {{ Form::close() }}
                        </div>
                    @endif
                    <a href="{{ url()->previous() }}">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
