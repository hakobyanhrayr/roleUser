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
                            <form action="{{route('store.post')}}" method="POST">
                                @csrf
                                <div  class="form-group">
                                    <label for="exampleInputEmail1">Title</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputEmail1">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Text</label>
                                    <textarea name="text" class="form-control" id="exampleFormControlTextarea1" rows="10"></textarea>
                                </div>
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
