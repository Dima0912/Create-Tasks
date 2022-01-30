@extends('layouts.app')
@section('content')
<div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="col-md-12">
        <h3 class="text-center">{{__('Edit')}}</h3>
            <form action="{{route('tasks.update', $task->id)}}" method="POST">
                @csrf @method('PUT')
                <div class="form-group">
                    <label for="title">{{__('Title')}}</label>
                    <input type="text" id="title" name="title" value="{{old('title', $task->title)}}" class="form-control  @error('title') is-invalid @enderror">
                </div>
                <div class="form-group">
                    <label for="content">{{__('Content')}}</label>
                    <input type="text" id="content" name='content' value="{{old('content', $task->content)}}"
                           class="form-control  @error('content') is-invalid @enderror">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>
        </div>
    </div>

    @endsection

  