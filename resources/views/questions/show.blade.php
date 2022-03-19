@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary pull-right">Back To All Questions</a>
                    <h1>{{ $question->title }}</h1>
                </div>
                <div class="card-body">
                    {!! \Illuminate\Mail\Markdown::parse($question->body) !!}
                    <div class="pull-right">
                        <span class="text-muted">Answered {{ $question->created_date }}</span>
                        <div class="media mt-2">
                            <div class="media-body answer-right">
                                <a href="{{ $question->user->url }}" class="pr-3">
                                    <img src="{{ $question->user->avatar }}">
                                </a>
                                <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="card-title">
                        <h2>{{ $question->answers_count." ".Str::plural('Answer', $question->answers_count) }}</h2>
                    </div>
                    <hr>
                    @foreach($question->answers as $answer) 
                        <div class="media">
                            <div class="media-body clearfix">
                                {!! \Illuminate\Mail\Markdown::parse($question->body) !!}
                                <div class="pull-right">
                                    <span class="text-muted">Answered {{ $answer->created_date }}</span>
                                    <div class="media mt-2">
                                        <div class="media-body answer-right">
                                            <a href="{{ $answer->user->url }}" class="pr-3">
                                                <img src="{{ $answer->user->avatar }}">
                                            </a>
                                            <a href="{{ $answer->user->url }}">{{ $answer->user->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
