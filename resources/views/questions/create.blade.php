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
                        @include('questions._form', ['buttonText' => 'Ask Question']);
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
