@csrf
<div class="form-group">
    <label for="question-title">Question Title</label>
    <input type="text" name="title" id="question-title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', isset($question->title) ? $question->title:'') }}">

    @error('title')
        <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mt-3">
    <label for="question-body">Explane Your Question</label>
    <textarea name="body" id="question-body" rows="10"  class="form-control @error('body') is-invalid @enderror">{{ old('body', isset($question->body) ? $question->body:'') }}</textarea>
    
    @error('body')
        <div class="alert alert-danger mt-1">{{ $message }}</div>
    @enderror
</div>
<div class="form-group mt-3">
    <button type="submit" class="btn btn-outline-primary btn-lg">{{ $buttonText }}</button>
</div>