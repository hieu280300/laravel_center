@extends('layouts.master')

@section('title', 'Edit Category')

    {{-- import file css (private) --}}
    @push('css')
        <link rel="stylesheet" href="/css/categories/category-edit.css">
    @endpush

@section('content')
    <h1>Edit Category</h1>
    @if ($errors->any())
        <?php echo implode('', $errors->all('<div>:message</div>')); ?>
    @endif
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group mb-3">
            <label for="">Category Name</label>
            <input type="text" name="category_name" value="{{ $category->name }} {{old('name')}}">
            @error('category_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <a href="{{ route('category.index') }}" class="btn btn-secondary">List Category</a>
            <input type="submit" name="submit" value="Update" class="btn btn-primary">
        </div>
    </form>
@endsection
