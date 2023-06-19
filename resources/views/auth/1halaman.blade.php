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
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="Your Email" required/>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat your password">
                    </div>
                    
                    <div class="form-group form-button">
                        <input type="submit" class="btn" value="{{ __('Register') }}"/>
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
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" placeholder="Password"/>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
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



@extends('layouts.form')

@section('content')
 
 <!-- Sing in  Form -->
 <section class="sign-in">
    <div class="container">
        <div class="signin-content">
            <div class="signin-image">
                <figure><img src="images/signin-image.jpg" alt="sing up image"></figure>
                <a href="{{ route('register') }}" class="signup-image-link">Create an account</a>
            </div>

            <div class="signin-form">
                <h2 class="form-title">Sign in</h2>
                <form method="POST" class="register-form" id="login-form" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                        <input type="text" name="email" id="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autofocus/>
                        
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="zmdi zmdi-lock"></i></label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="your_pass" placeholder="Password" required/>
                    
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    
                    </div>
                    {{-- <div class="form-group">
                        <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                        <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                    </div> --}}
                    <div class="form-group form-button">
                        <input type="submit" name="signin" id="signin" class="form-submit" value="Log in"/>
                        {{-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif --}}
                    </div>
                </form>
                
            </div>
        </div>
    </div>
</section>

</div>
@endsection