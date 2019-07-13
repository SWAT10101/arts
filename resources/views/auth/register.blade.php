@extends('layouts.app')

@section('register')
<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <h5 class="center-align">Register</h5>



                    <div class="row">
                        <form class="col s12" method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row">
                                <div class="input-field col s12">
                                    <input value="{{ old('name') }}" id="name" type="text" name="name">
                                    <label for="name">Name</label>

                                    @error('name')
                                    <span class="helper-text red-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input value="{{ old('email') }}" id="email" type="text"
                                        class="validate @error('email') invalid @enderror" name="email">
                                    <label for="email">E-Mail Address</label>

                                    @error('email')
                                    <span class="helper-text red-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password" type="password"
                                        class="validate @error('password') invalid @enderror" name="password">
                                    <label for="password">Password</label>

                                    @error('password')
                                    <span class="helper-text red-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="input-field col s12">
                                    <input id="password-confirm" type="password" name="password_confirmation">
                                    <label for="password-confirm">Confirm Password</label>
                                </div>
                            </div>




                    </div>

                </div>


                <div class="card-action">
                    <button type="submit" class="btn btn-primary pink">Register</button>
                </div>
                </form>
            </div>
        </div>
    </div>




</div>
@endsection
