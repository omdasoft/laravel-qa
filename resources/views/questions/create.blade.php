@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('questions.index') }}" class="btn btn-outline-secondary pull-right">Back To All Questions</a>
                    <h2>Ask Question</h2>
                </div>
                <div class="card-body">
                    <form action="{{ route('questions.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="question-title">Question Title</label>
                            <input type="text" name="title" id="question-title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">

                            @error('title')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <label for="question-body">Explane Your Question</label>
                            <textarea name="body" id="question-body" rows="10"  class="form-control @error('body') is-invalid @enderror" value="{{ old('body') }}"></textarea>
                            
                            @error('body')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-outline-primary btn-lg">Ask This Question</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
