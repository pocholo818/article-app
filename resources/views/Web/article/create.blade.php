@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Article') }}</div>

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
