@extends('layouts.app')

@section('login')


<div class="container">
    <div class="row ">
        <div class="col s6 offset-s3">
            <div class="card">
                <div class="card-content">
                    <span class="card-title">Login</span>

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
                                <span class="black-text">Remember Me</span>
                            </label>


                        
                    </div>
                   
                </div>

                <div class="card-action">
                <button type="submit" class="btn btn-primary">Login</button>
                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
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
