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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
