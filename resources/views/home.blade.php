@extends('layouts.app')

@section('nav','')

@section('content')

    @component('center')
    <div class="title is-1">Dashboard</div>
    <div class="section is-paddingless-horizontal">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        You are logged in! 
    </div>
    <div>
        <a href="{{ route('logout')}}" class="button is-primary is-fullwidth">logout</a>
    </div>
    @endcomponent

@endsection
