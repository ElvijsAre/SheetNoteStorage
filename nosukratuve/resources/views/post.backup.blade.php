@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Sludinājums</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/post') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Virsraksts</label>

                            <div class="col-md-6">
                                <input type="title" class="form-control" name="title" value="{{ old('title') }}">

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('Text') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Teksts</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="text">

                                @if ($errors->has('text'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('text') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-post"></i>Iesūtīt
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection





    @extends('layouts.app')

    @section('content')

    <div class="container">
  
    {!! Form::open(['id' => 'post_post-form'])!!}
    
        {!! Form::label('title','Title') !!}
        {!! Form::text('title', null, ['id' => 'title', 'class' => 'form-controle', 'placeholder' => 'title'], 'required') !!}
        </br>
        {!! Form::label('text','Text') !!}
        {!! Form::textarea('text', null, ['id' => 'text', 'class' => 'form-controle', 'placeholder' => 'text'], 'required') !!}
        </br>
        {!! Form::button('Post', ['class' => 'btn btn-lg btn-primary btn-block', 'type' => 'submit']) !!}
    
    {!! Form::close() !!}

    </div> <!-- /container -->
    
    @endsection