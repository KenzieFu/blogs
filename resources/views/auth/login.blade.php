@extends('layouts.form')

@section('content')
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                {{-- sign up form --}}
                <form method="POST" class="sign-up-form" action="{{ route('register') }}">
                    <h2 class="title">Sign up</h2>
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Your Name" required autofocus/>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <p class="moo">{{ $message }}</p>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" required/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <p class="moo">{{ $message }}</p>
                        </span>
                    @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <p class="moo">{{ $message }}</p>
                        </span>
                    @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">
                    </div>
                    
                    <div class="form-group form-button">
                        <input type="submit" class="btn" value="{{ __('Register') }}" href="{{ route('login') }}"/>
                    </div>
                </form>

                {{-- sign in form --}}
                <form method="POST" class="sign-in-form" action="{{ route('login') }}">
                    <h2 class="title">Sign in</h2>
                    @csrf
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" required/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <p class="moo">{{ $message }}</p>
                        </span>
                    @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <p class="moo">{{ $message }}</p>
                        </span>
                    @enderror
                    </div>

                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="btn solid" value="Login"/>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>One of us ?</h3>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
                        laboriosam ad deleniti.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="img/register.svg" class="image" alt="" />
            </div>
        </div>
    </div>
@endsection

{{-- <a href="{{ route('register') }}" class="btn transparent">Sign up</a> --}}