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
                            <input type="text" name="title" id="question-title" class="form-control {{ $errors->has('title') ? 'is-invalid':'' }}">

                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first()->title }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group mt-3">
                            <label for="question-body">Explane Your Question</label>
                            <textarea name="body" id="question-body" rows="10"  class="form-control {{ $errors->has('body') ? 'is-invalid':'' }}"></textarea>
                            
                            @if($errors->has('body'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first()->body }}</strong>
                                </div>
                            @endif
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
