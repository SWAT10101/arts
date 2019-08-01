@extends('layouts.app')



@section('add_menu')
<div class="container">
    <div class="row ">
        <div class="col s12 m6 offset-m3">
            <div class="card">
                <div class="card-content">
                    <h5 class="center-align">ADD MENU</h5>

                    <div class="row">
                      
                        <form class="col s12" method="POST" action="{{ route('menu.store') }}">
                            @csrf
                            <div class="row">
                                <div class="input-field col s12">
                                    <input value="{{ old('menu_name') }}" id="menu_name" type="text"
                                        class="validate @error('menu_name') invalid @enderror" name="menu_name">
                                    <label for="menu_name">Menu name</label>

                                    @error('menu_name')
                                    <span class="helper-text red-text">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                </div>

                <div class="card-action">
                    <button type="submit" class="btn btn-primary pink">Add</button>
                </div>
                </form>
            </div>

        </div>
    </div>
</div>
@endsection