@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}</div>

                <div class="card-body">
                    <label>Name</label></br>
                    <input type="text" name="title" id="title" value="{{ auth()->user()->name }}" class="form-control" readonly></br>
                    <label>Email</label></br>
                    <input type="text" name="title" id="title" value="{{ auth()->user()->email }}" class="form-control" readonly></br>
                    <label>Account Created On</label></br>

                    <h6>{{ date('F d, Y h:i A', strtotime(date(auth()->user()->created_at))) }}</h6>
                </div>

                <!--  -->
            </div>
        </div>
    </div>
</div>
@endsection
