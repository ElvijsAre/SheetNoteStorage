@extends('layouts.app')

@section('content')

 
        <table class="table table-bordered table-hover" >
            <thead>
                <th>Title</th>
                <th>Category</th>
                <th>Text</th>
                <th>User</th>
                <th>Time</th>
                <th>Posted</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name}}</td>
                    <td>{{ $post->text }}</td>
                    <td>{{ $post->user->name}}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection