@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('questions.create') }}" class="btn btn-outline-secondary pull-right">Ask Question</a>
                    <h2>All Questions</h2>
                </div>
                <div class="card-body">
                   @include('layouts._messages')
                   @foreach ($questions as $question)
                       <div class="media d-flex flex-row">
                            <div class="d-flex flex-column counters">
                                <div class="vote">
                                    <strong>{{ $question->votes }}</strong> {{ Str::plural('vote', $question->votes )}}
                                </div>
                                <div class="status {{ $question->status }}">
                                    <strong>{{ $question->answers }}</strong> {{ Str::plural('answer', $question->answers ) }}
                                </div>
                                <div class="view">
                                    {{ $question->views." ".Str::plural('view', $question->views )}}
                                </div>
                            </div>
                           <div class="media-body">
                                <h3 class="mt-0"><a href="{{ $question->url }}">{{ $question->title }}</a></h3>
                                <a href="{{ route('questions.edit', $question->id)}}" class="btn btn-sm btn-outline-info pull-right">Edit</a>
                               <p class="lead">
                                    Asked By : 
                                    <a href="{{ $question->user->url }}">{{ $question->user->name }}</a>
                                    <small class="text-muted">{{ $question->created_date }}</small>
                               </p>
                               {{ Str::limit($question->body, 500) }}
                           </div>
                       </div>
                       <hr>
                   @endforeach

                   {{ $questions->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
