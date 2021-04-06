@extends('layouts.master')
@section('title', 'Create Task')
    @push('css')
        <link rel="stylesheet" href="/css/categories/category-create.css">
    @endpush
@section('content')
    <h1>Create Task</h1>
    @include('errors.error')
    <br>
    <form action="{{ route('task.store') }}" method="post">
        @csrf
        <div class="form-group mb-5">
            <label for="">Task Content</label>
            <input type="text" name="content" placeholder="task content" value="{{ old('content') }}" class="form-control">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <div class="form-group mb-5" class="form-control">
            <label for="">Name of User</label>
            <select name="user_id" class="form-control">
                <option value=""></option>
                @if (!empty($users))
                    @foreach ($users as $userId => $userName)
                        <option value="{{ $userId }}" {{ old('user_id') == $userId ? 'selected' : ' ' }}>
                            {{ $userName }}</option>
                    @endforeach
                @endif
            </select>
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
       
        <div class="form-group">
            <a href="{{ route('task.index') }}" class="btn btn-secondary">List task</a>
            <button class="btn btn-primary" type="submit">create</button>
        </div>
    </form>
@endsection
