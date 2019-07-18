@extends('layouts.app')

@section('nav','')

<!-- .section -->
@section('content')
    @component('center')
	<form   method="POST" action="{{ route('login') }}">
        @csrf
		<div class="field first">
		    <p class="control has-icons-left">
		        <input class="input is-underlined" type="email" placeholder="{{ __('Email')}}" id="email" name="email" value="{{ old('email') }}" required>
		        <span class="icon is-small is-left">
		            <i class="fas fa-envelope"></i>
		        </span>
		    </p>
            @error('email')
            <p class="help is-danger">
               {{ __($message) }}
            </p>
            @enderror
		</div>
		<div class="field">
		    <p class="control has-icons-left">
			    <input class="input is-underlined" type="password" placeholder="{{ __('Password')}}" id="password" name="password" required>
			    <span class="icon is-small is-left">
			       <i class="fas fa-lock"></i>
			    </span>
		    </p>
            @error('password')
            <p class="help is-danger">
               {{ __($message) }}
            </p>
            @enderror
		</div>
        
		<div class="field last">
		    <p class="control">
		        <button class="button is-primary">{{ __('Login')}}</button>
		    </p>
		</div>

        <div class="field is-grouped is-grouped-centered">
            <div class="control">   
                <label class="button is-text is-paddingless is-small" for="remember">
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    {{ __('Remember Me') }}
                </label>
            </div>
            <div class="control">
                @if (Route::has('password.request'))
                <a class="is-paddingless button is-small is-text" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
                @endif
            </div>
        </div>
        <div  class="field columns is-centered is-mobile is-multiline">
            <div class="column is-12 has-text-centered">
                Or you can login with
            </div>
            <div class="socialite-column column is-narrow">
                <a href="{{ url('/oauth/github') }}" class="button is-link is-rounded"><span class="icon socialite"><i class="fab fa-github"></i></span> <span class="is-hidden-mobile">Github</span></a>
            </div>
            <div class="socialite-column column is-narrow">
                <a href="{{ url('/oauth/twitter') }}" class="button is-link is-rounded"><span class="icon socialite"><i class="fab fa-twitter"></i></span> <span class="is-hidden-mobile">Twitter</span></a>
            </div>
            <div class="socialite-column column is-narrow">
                <a href="{{ url('/oauth/facebook') }}" class="button is-link is-rounded"><span class="icon socialite"><i class="fab fa-facebook"></i></span> <span class="is-hidden-mobile">Facebook</span></a>
            </div>
        </div>
    </form>
    @endcomponent()

<!-- /.section -->
<!-- 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  -->
@endsection
