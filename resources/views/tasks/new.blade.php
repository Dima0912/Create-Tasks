@extends('layouts.app')
@section('content')
<div class="container">
    <div class="col-md-12">
        <h3 class="text-center">{{__('New Task')}}</h3>
        <div class="col-md-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }} </li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form action="{{ url ('tasks/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <div class="col-sm-6">

                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}">
                </div>
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                <div class="col-sm-6">
                    <input type="text" id="content" name='content' class="form-control @error('content') is-invalid @enderror" value="{{old('content')}}">
                </div>
            </div>
            <div>
                <button type="submit" class="btn btn-primary">Create Task</button>
            </div>

        </form>
    </div>
</div>
@endsection