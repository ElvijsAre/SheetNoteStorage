@extends('layouts.app')

@section('content')

 
        <table class="table table-bordered table-hover" >
            <thead>
                <th>Visraksts</th>
                <th>Kategorija</th>
                <th>Teksts</th>
                <th>Lietotajs</th>
                <th>Tel. numurs</th>
                <th>E-pasts</th>
                <th>Tiešais laiks</th>
                <th>Pirms</th>
            </thead>
            <tbody>
                @foreach($posts as $post)
                <tr>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category->name}}</td>
                    <td>{{ $post->text }}</td>
                    <td>{{ $post->user->name}}</td>
                    <td>{{ $post->phone}}</td>
                    <td>{{ $post->email}}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->created_at->diffForHumans()}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection