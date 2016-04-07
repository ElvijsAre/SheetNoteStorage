@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">All posts!</div>

                <div class="panel-body">
                    @forelse($posts as $post)
                    <div class="well">
                        <div class="media">
                            <h4 class="media-heading">{{$post->title}}</h4>
                            <p> 
                                <span style="float: left">{{$post->category->name}}</span>
                                <span style="float: right"> Author: {{$post->user->name}}</span>
                            </p>
                            <br>
                            <p>{{$post->text}}</p>
                            <h6>
                                <span style="float: left">{{$post->phone}} | {{$post->email}}</span>
                            </h6>
                            <br>
                            <ul class="list-inline list-unstyled">
                                <li><span><i class="glyhicon-calendar">{{$post->created_at->diffForHumans()}}</i></span></li>
                            </ul>
                        </div>
                    </div>
                    @empty
                    <p>No posts found</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
