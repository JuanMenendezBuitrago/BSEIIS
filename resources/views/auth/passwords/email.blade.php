@extends('layouts.app')

@section('nav', '')

@section('content')
    @component('center')
    <form class="column" method="POST" action="{{ route('password.email') }}">
        <div class="title is-2">{{ __('Reset Password') }}</div>

        @if (session('status'))
            <div class="notify is-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @csrf

        <div class="field">
            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

            <div class="control has-icons-left">
                <input id="email" type="email" class="is-underlined input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
            <div class="control">
                <button type="submit" class="button is-primary">
                    {{ __('Send Password Reset Link') }}
                </button>
            </div>
        </div>
    </form>
    @endcomponent
@endsection
