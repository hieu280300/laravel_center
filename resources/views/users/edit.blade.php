@extends('layouts.master')
@section('title', 'Create Post')
    @push('css')
        <link rel="stylesheet" href="/css/categories/category-create.css">
    @endpush
@section('content')
    <h1>Edit User</h1>
    @include('errors.error')
    <br>
    <form action="{{ route('user.update',$user->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-5">
            <label for="">User Name</label>
            <input type="text" name="name" placeholder="user name" value="{{$user->name}}{{ old('name') }}" class="form-control">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group mb-5">
            <label for="">User email</label>
            <input type="text" name="email" placeholder="email" value="{{$user->email}}{{old('email')}}" class="form-control">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

        </div>
        <br>
        <div class="form-group mb-5" class="form-control">
            <label for="">User password</label>
            <input type="text" name="password" placeholder="password" value="{{$user->password}}{{old('password')}}" class="form-control">
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <a href="{{ route('user.index') }}" class="btn btn-secondary">List Post</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
@endsection
