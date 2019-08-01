@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <h5 class="center-align">{{ __('Reset Password') }}</h5>

                    <div class="row">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

   

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="row">

                            <div class="input-field col s12">
                                    <input value="{{ old('email') }}" id="email" type="email"
                                        class="validate @error('email') invalid @enderror" name="email">
                                    <label for="email">{{ __('E-Mail Address') }}</label>

                                    @error('email')
                                    <span class="helper-text red-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>



                            <div class="card-action">
                                <button type="submit" class="btn btn-primary pink">
                                    {{ __('Send Password Reset Link') }}
                                </button>


                            </div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>




@endsection
