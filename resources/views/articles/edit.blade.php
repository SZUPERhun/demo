@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit {!! $article->title !!}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('errors.form')

                    {!! Form::model($article, ['method' => 'PATCH', 'url' => 'articles/' . $article->url]) !!}
                        @include('articles.partials.form', ['submitButtonText' => 'Update Article'])
                    {!! Form::close() !!}
                </div>
                <a href="{{ url()->previous() }}">Back</a>
            </div>
        </div>
    </div>
</div>
@endsection
