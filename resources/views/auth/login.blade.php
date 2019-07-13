@extends('layouts.app')

@section('login')


<div class="container">
    <div class="row ">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <h5 class="center-align">Login</h5>

                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('login') }}">
                            @csrf


                            <div class="row">
                                <div class="input-field col s12">
                                    <input value="{{ old('email') }}" id="email" type="email"
                                        class="validate @error('email') invalid @enderror" name="email">
                                    <label for="email">Email</label>

                                    @error('email')
                                    <span class="helper-text red-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input name="password" id="password" type="password">
                                    <label for="password">Password</label>

                                    @error('password')
                                    <span class="helper-text red-text">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>

                            <label>
                                <input name="remember" id="remember" type="checkbox" class="filled-in" />
                                <span>Remember Me</span>
                            </label>
                    </div>
                </div>

                <div class="card-action">
                    <button type="submit" class="btn btn-primary pink">Login</button>
                    @if (Route::has('password.request'))
                    <a class="blue-text text-lighten-1" href="{{ route('password.request') }}">
                        Forgot Your Password?
                    </a>
                    @endif
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection
