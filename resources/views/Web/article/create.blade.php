@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex flex-row align-items-center justify-content-between">{{ __('Add New Article') }}
                    <a href="{{ url('article') }}"
                        class="btn btn-success btn-sm" title="Add New Article">X</a>
                </div>

                <div class="card-body">
                    <form action="{{ url('article') }}" method="post">
                        {!! csrf_field() !!}
                        <label>Title</label></br>
                        <input type="text" name="title" id="title" class="form-control"></br>
                        <label>Content</label></br>
                        <!-- <input type="textbox" name="content" id="content" class="form-controle"></br></br> -->
                        <textarea name="content" id="content" class="form-control"></textarea></br>
                        <input type="submit" value="Save" class="btn btn-success"></br>
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
