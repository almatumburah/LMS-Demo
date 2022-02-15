@extends('layouts.main')

@section('content')
<section class="special_cource padding_top">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <p>Registration</p>
                    <h2>Email and Password</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <input id="user_type" type="hidden" class="form-control" name="user_type" value="Student" >
                    <div class="row">
                        <div class="col">
                            <label for="name">{{ __('Username') }}</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="email" >{{ __('E-Mail Address') }}</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <br>
                    <div class="row">
                        <div class="col">
                            <label for="password" >{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                        </div>
                    </div>

                    <br><br>
                    <div class="form-group row mb-0">
                        <div class="col">
                            <button type="submit" class="btn_4 mr-1 mb-1">
                                {{ __('Sign me up') }}
                            </button>
                        </div>
                    </div>

                    <br>
                    
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
