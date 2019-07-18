@extends('layouts.app')

@section('nav', '')

@section('content')
    @component('center')
    <form class="column" method="POST" action="{{ route('password.update') }}">
        <div class="title is-3">{{ __('Reset Password') }}</div>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="field">
            <div class="control  has-icons-left">
                <input placeholder="{{ __('E-Mail Address') }}" id="email" type="email" class="is-underlined input @error('email') is-danger @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
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
            <div class="control  has-icons-left">
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
            <div class="control  has-icons-left">
                <input placeholder="{{ __('Confirm Password') }}" id="password-confirm" type="password" class="is-underlined input" name="password_confirmation" required autocomplete="new-password">
                <span class="icon is-small is-left">
                    <i class="fas fa-lock"></i>
                </span>                
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button type="submit" class="button is-primary">
                    {{ __('Reset Password') }}
                </button>
            </div>
        </div>
    </form>
    @endcomponent
@endsection
