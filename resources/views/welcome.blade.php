@extends('layouts.app')

@section('content')
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @foreach($posts as $post)
             <div class="card">
                    <h5 class="card-header">{{$post->name}}</h5>
                    <p>{{$post->text}}</p>
             </div>
            @endforeach
        </div>
@endsection
