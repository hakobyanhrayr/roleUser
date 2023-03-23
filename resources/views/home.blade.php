@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="container mt-6">
                        <div class="row">
                            <div class="col-md-12">
                                <a href="{{route('add.post')}}"  class="btn btn-success mb-3">Add new Post</a>
                                @foreach($posts as $post)
                                    <div class="card">
                                        <h5 class="card-header">{{$post->name}}</h5>
                                        <div class="card-body" style="display: flex">
                                            <a href="{{route('edit.post',$post->id)}}" class="btn btn-primary mr-3">Edit</a>
                                            <form action="{{route('delete.post',$post->id)}}" method="POST" style="margin-left: 10px">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Dell</button>
                                            </form>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-12">
                                <div class="card">
                                    <h3 class="card-header mb-3">User List</h3>
                                    @foreach($users as $user)
                                        <div class="card-body">
                                            <h3 class="card-header">{{$user->name}}</h3>
                                            <form action="" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">Dell</button>
                                            </form>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
