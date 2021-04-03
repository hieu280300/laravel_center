@extends('layouts.master')

@section('title', 'List User')

{{-- import file css (private) --}}
@push('css')
    <link rel="stylesheet" href="/css/categories/category-list.css">
@endpush

@section('content')
    {{-- form search --}}

    {{-- create category link --}}
    {{-- case 1 --}}
    <p><a href="{{ route('user.create') }}">Create</a></p>
    
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
                <th>User Name</th>
                <th>User Email</th>
                <th>User Password</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($users))
                @foreach ($users as $key => $user)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $user-> name }}</td>
                        <td>{{ $user-> email }}</td>
                        <td>{{ $user-> password }}</td>
                        <td><a href="{{ route('user.show', $user->id) }}">Detail</a></td>
                        <td><a href="{{ route('user.edit', $user->id) }}">Edit</a></td>
                        <td>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post">
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
    {{$users->links()}}
@endsection