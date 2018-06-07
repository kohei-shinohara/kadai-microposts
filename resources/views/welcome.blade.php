@extends('layouts.app')

@section('content')
    <div class="center jumbotron">
        <div class="text-center">
            <h1>Welcome to the Microposts</h1>
            <h3>~The Best SNS Experience JUST FOR YOU~</h3>
             {!! link_to_route('signup.get', 'SIGN UP Here!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection