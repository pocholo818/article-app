@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('View Article') }}</div>

                <div class="card-body">
                    <form action="{{ url('article/'.$articles->article_id) }}" method="post">
                        {!! csrf_field() !!}
                        @method("PATCH")
                        <label>Title</label></br>
                        <input type="text" name="title" id="title" value="{{ $articles->title }}" class="form-control"></br>
                        <label>Content</label></br>
                        <textarea name="content" id="content" class="form-control">{{ $articles->content }}</textarea></br>
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
