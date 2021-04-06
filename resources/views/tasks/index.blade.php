@extends('layouts.master')

@section('title', 'List Task')

{{-- import file css (private) --}}
@push('css')
    <link rel="stylesheet" href="/css/categories/category-list.css">
@endpush

@section('content')
    {{-- form search --}}

    {{-- create category link --}}
    {{-- case 1 --}}
    <p><a href="{{ route('task.create') }}">Create</a></p>
    
    {{-- case 2 --}}
    {{-- <p><a href="/category/create">Create</a></p> --}}

    {{-- show message --}}
    @if(Session::has('success'))
        <p class="text-success">{{ Session::get('success') }}</p>
    @endif

    {{-- show error message --}}
    @if(Session::has('error'))
        <p class="text-danger">{{ Session::get('error') }}</p>
    @endif

    {{-- display list category table --}}
    <table id="user-list" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Task Content</th>
                <th>Name of User</th>
              
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($tasks))
                @foreach ($tasks as $key => $task)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $task->content}}</td>
                        <td>{{ $task->user->name }}</td>
                        <td><a href="{{ route('task.show', $task->id) }}">Detail</a></td>
                        <td><a href="{{ route('task.edit', $task->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('task.destroy', $task->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
      
    </table>
    {{$tasks -> links()}}
@endsection