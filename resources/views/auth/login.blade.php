@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>LOGING IN</h1>
    </div>

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'login.post']) !!}
                <div class="form-group">
                    {!! Form::label('email', 'EMAIL') !!}
                    {!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('password', 'PASSWORD') !!}
                    {!! Form::password('password', ['class' => 'form-control']) !!}
                </div>

                {!! Form::submit('LOG IN', ['class' => 'btn btn-primary btn-block']) !!}
            {!! Form::close() !!}

            <p>If You Do Not Have an Account? {!! link_to_route('signup.get', 'SIGN UP Here!') !!}</p>
        </div>
    </div>
@endsection