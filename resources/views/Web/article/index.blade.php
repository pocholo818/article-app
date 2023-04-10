@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            
            <div>
                <div class="card-header d-flex flex-row align-items-center justify-content-between mb-3"><h2 class="fw-bold">{{ __('Articles') }}</h2>
                    @if(auth()->user())
                    <a href="{{ url('/article/create') }}"
                        class="btn btn-success btn-sm" title="Add New Article">+</a>
                    @endif
                </div>

                <!--  -->
                @foreach($articles as $item)
                <div class="card mb-4">
                    <div class="card-header d-flex flex-row align-items-center justify-content-between">{{ $item->title }}
                        <div class="dropdown">
                            <button class="btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-three-dots"></i>
                            </button>
                            
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item btn-danger" href="{{ url('/article/'.$item->article_id.'/edit') }}" title="Edit Article">Edit</a></li>
                                <li>
                                    <form method="POST" action="{{ url('/article'. '/' .$item->article_id) }}" accept-charset="UTF-8" style="display: inline;">
                                    {{ method_field('DELETE') }}
                                    {{ csrf_field() }}
                                    <button type="submit" class="dropdown-item btn-danger" title="Delete Article" onclick="return confirm('Confirm Delete?')">Delete</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="card-body">
                        <p class="card-text">{{ $item->content }}</p>
                        <a href="{{ url('/article/'.$item->article_id) }}"><button type="button" class="btn btn-primary">View</button></a>
                    </div>
                </div>
                @endforeach

                <!--  navbar -->
                {{ $articles->onEachSide(1)->links(); }}

                <!-- idk -->
                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div> -->
            </div>
        </div>
    </div>
</div>
@endsection
