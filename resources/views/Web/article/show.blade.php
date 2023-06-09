@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex flex-row align-items-center justify-content-between" >{{ __('View Article') }}
                    <a href="{{ url('article') }}"
                        class="btn btn-success btn-sm" title="Add New Article">X</a>
                </div>

                <div class="card-body">
                    <form action="{{ url('article') }}" method="post">
                        {!! csrf_field() !!}
                        <h3 class="m-0">{{ $articles->title }}</h3>
                        <p>{{ date('m/d/Y h:i A', strtotime($articles->created_at)) }}</p>

                        <p>{{ $articles->content }}</p>
                        <!-- <label>Title</label></br>
                        <input type="text" name="title" id="title" value="{{ $articles->title }}" class="form-control" readonly></br>
                        <label>Content</label></br>
                        <textarea name="content" id="content" class="form-control" readonly>{{ $articles->content }}</textarea></br> -->
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
