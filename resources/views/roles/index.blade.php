@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{--            <div class="card">--}}
                {{--                <div class="card-header">{{ __('Dashboard') }}</div>--}}

                <div class="container mt-6">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="{{route('roles.create')}}"  class="btn btn-success mb-3">Add new Role</a>
                            @foreach($roles as $role)
                                <div class="card">
                                    <h5 class="card-header">{{$role->name}}</h5>
                                    <div class="card-body" style="display: flex">
                                        <a href="{{route('roles.edit',$role->id)}}" class="btn btn-primary mr-3">Edit</a>
                                        <form action="{{route('roles.destroy',$role->id)}}" method="POST" style="margin-left: 10px">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Dell</button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                {{--            </div>--}}
            </div>
        </div>
    </div>
@endsection
