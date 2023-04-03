@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Articles') }}
                    @if(auth()->user())
                    <a href="{{ url('/article/create') }}" style="float: right;"
                        class="btn btn-success btn-sm" title="Add New Article">+</a>
                    @endif
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <!-- <th>#</th> -->
                                    <th>Title</th>
                                    <th>Date</th>
                                    @if(auth()->user())
                                    <th>Actions</th>
                                    @endif
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($articles as $item)
                                <tr>
                                    <!-- <td>{{ $item->article_id }}</td> -->
                                    <td><a href="{{ url('/article/'.$item->article_id) }}" 
                                        style="color: black; text-decoration: none; display: block;">{{ $item->title }}</a></td>
                                    <td>{{ date('m-d-Y h:i A', strtotime($item->created_at)) }}</td>

                                    @if(auth()->user())
                                    <td>
                                        <!-- <a href="{{ url('/article/'.$item->article_id) }}" title="View Article"><button class="btn btn-info btn-sm">View</button></a> -->
                                        <a href="{{ url('/article/'.$item->article_id.'/edit') }}" title="Edit Article"><button class="btn btn-primary btn-sm">Edit</button></a>
                                        <!-- <a href="" title="Delete Article"><button class="btn btn-danger btn-sm">Delete</button></a> -->
                                        <form method="POST" action="{{ url('/article'. '/' .$item->article_id) }}" accept-charset="UTF-8" style="display: inline;">
                                            {{ method_field('DELETE') }}
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Article" onclick="return confirm('Confirm Delete?')">Delete</button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!--  -->
                        {{ $articles->onEachSide(1)->links(); }}

                    </div>
                </div>
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
