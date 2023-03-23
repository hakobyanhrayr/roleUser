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
                            @if ($errors->any())
                                <div class="alert alert-danger mt-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('roles.store')}}" method="POST">
                                @csrf
                                <div  class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                                </div>
                                @foreach($permissions as $permission)
                                    <div class="form-group form-check">
                                        <input type="checkbox" value="{{$permission->id}}" name="permissions[]" class="form-check-input" id="exampleCheck{{$permission->id}}">
                                        <label class="form-check-label" for="exampleCheck{{$permission->id}}">{{$permission->name}}</label>
                                    </div>
                                @endforeach
                                <button type="submit" class="btn btn-primary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
                {{--            </div>--}}
            </div>
        </div>
    </div>
@endsection
