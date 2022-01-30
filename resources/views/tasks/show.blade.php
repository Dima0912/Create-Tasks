@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h3 class="text-center">{{ __('Tasks') }}</h3>
        </div>
        <div class="col-md-12">
            <table class="table align-self-center">
                <thead>
                    <tr>
                        <th class="text-center" scope="col">Id</th>
                        <th class="text-center" scope="col">Title</th>
                        <th class="text-center" scope="col">Content</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($task as $tasks)
                    <tr>
                        <td class="text-center" scope="col">{{ $tasks->id }}</td>
                        <td class="text-center" scope="col">{{ $tasks->title }}</td>
                        <td class="text-center" scope="col">{{ $tasks->content }}</td>

                        <td class="text-center" scope="col">
                            <a href="{{ route('tasks.edit', $tasks)}}" class="bth btn-info form-control">Edit</a>
                            <form action="{{ route('tasks.delete', $tasks) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger form-control" value="Remove">
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>

            </table>
           
        </div>
    </div>
</div>
@endsection