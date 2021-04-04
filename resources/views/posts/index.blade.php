@extends('layouts.master')
<!-- //import file css -->
@push('css')
    <link rel="stylesheet" href="/css/posts/post-list.css">
@endpush
@section('title', 'List Post')
@section('content')
@include('posts.search')
<p><a href="{{ route('post.create') }}">Create</a></p>
        
        {{-- show message --}}
        @if (Session::has('success'))
            <p class="text-success">{{ Session::get('success') }}</p>
        @endif

        {{-- show error message --}}
        @if (Session::has('error'))
            <p class="text-danger">{{ Session::get('error') }}</p>
        @endif  

    <br>
    <table id="post" class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">post Name</th>
                <th scope="col">post content</th>
                <th scope="col">Category Name</th>
                <th scope="col">Thumbnail</th>
                <th scope="col" colspan="3">Action</th>
            </tr>
        </thead class="thead-light">
        <tbody>
            @if (!empty($posts))
                @foreach ($posts as $key => $post)
                    <tr>
                        <td scope="col">{{ $key+1 }}</td>
                        <td scope="col">{{ $post->name }}</td>
                        {{-- <td scope="col">{{ $post->$->content }}</td> --}}
                        <td scope="col">{{ $post->category->name }}</td>
                        <td>
                            <img src="{{ asset($post->thumbnail) }}" alt="{{ $post->name }}" class="img-flid" style="width:20px">
                        </td>
                        {{-- <td scope="col">{{$posts->}}</td> --}}
                        <td><a href="{{ route('post.show', $post->id) }}">Detail</a></td>
                        <td scope="col"><a href="{{ route('post.edit', $post->id) }}">Edit</a> </td>
                        <td>
                            <form action="{{ route('post.destroy', $post->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <input type="submit" name="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
{{$posts -> links()}}
@endsection
