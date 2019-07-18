@extends('layouts.app')

@section('nav','')

<!-- .section -->
@section('content')
    @component('center')
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="title is-2">{{ __('Register') }}</div>

        <div class="field">
            <div class="control has-icons-left">
                <input placeholder="{{ __('Name') }}" id="name" type="text" class="is-underlined input @error('name') is-danger @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                <span class="icon is-small is-left">
                    <i class="fas fa-user"></i>
                </span>
                @error('name')
                    <span class="help is-danger" role="alert">
                       {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left">
                <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="is-underlined input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
                @error('email')
                    <span class="help is-danger" role="alert">
                       {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left">
                <input placeholder="{{ __('Password') }}" id="password" type="password" class="is-underlined input @error('password') is-danger @enderror" name="password" required autocomplete="new-password">
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
                @error('password')
                    <span class="help is-danger" role="alert">
                       {{ $message }}
                    </span>
                @enderror
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left">
                <input placeholder="{{ __('Confirm Password') }}" id="password-confirm" type="password" class="is-underlined input" name="password_confirmation" required autocomplete="new-password">
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>
            </div>
        </div>

        <div class="field">
            <div class="control has-icons-left">
                <button type="submit" class="button is-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
        <hr>
        <div class="field columns is-centered is-mobile">
            <div class="column is-narrow">
                <a href="{{ url('/oauth/github') }}" class="button is-primary is-fullwidth"><span class="icon"><i class="fab fa-github"></i></span> <span class="is-hidden-mobile">Github</span></a>
            </div>
            <div class="column is-narrow">
                <a href="{{ url('/oauth/twitter') }}" class="button is-primary is-fullwidth"><span class="icon"><i class="fab fa-twitter"></i></span> <span class="is-hidden-mobile">Twitter</span></a>
            </div>
        </div>
    </form>
    @endcomponent
@endsection
