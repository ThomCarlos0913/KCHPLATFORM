@php
    # Override variables
    $css = "/css/login.css";
    $title = "Intern Portal";
@endphp
@extends('layouts.boilerplate')

@section('content')
<div class="h-100 d-flex justify-content-center align-items-center">
    <div class="login-container">
        <div class="row login-row">
            <div class="col-lg-6 login-form-container">
                <img class="kch-logo" src="assets/kch-logo.png" alt="knowledge channel logo">
                <h1 class="form-header">MEMBER LOGIN</h1>
                <form action="{{ route('login') }}" method="POST" class="login-form">
                  @csrf
                    <div class="form-inputs">
                        <div class="portal-input-container">
                            <i class="far fa-user"></i>
                            <input id="email" class="portal-input" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email Address" name="email" required autocomplete="email" autofocus/>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="portal-input-container">
                            <i class="fas fa-unlock-alt"></i>
                            <input id="password" class="portal-input" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password"/>
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="login-options d-flex justify-content-between">
                            <div class="remember-me">
                                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </div>
                            @if (Route::has('password.request'))
                                    <a class="forgot" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                            @endif
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12">
                                <button type="submit" class="form-button button button-main d-flex justify-content-between">
                                    <span>Login Account</span>
                                    <span><i class="fas fa-long-arrow-alt-right"></i></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
                <span class="login-footer d-flex justify-content-between">
                    <small>Copyright © 2020</small>
                    <small>
                        <a href="#">Help</a>
                        <a href="#">Terms of Use</a>
                        <a class="last-footer" href="#">Contacts</a>
                    </small>
                </span>
            </div>
            <div class="col-lg-6 login-board d-flex flex-column justify-content-between align-items-center">
                <div>
                    <h1 class="header board-header">IT IS FUN TO LEARN!</h1>
                    <p class="p board-p">Let us transform the learning experiences through media
                        and technology in the service of the Filipino children.</p>
                </div>
                <img class="board-image" src="assets/board-svg.svg" alt="team working together">
                <div class="social-links">
                    <h2 class="header social-link-header">SOCIAL LINKS</h2>
                    <div>
                        <a class="links" href="https://www.facebook.com/knowledgechannel/" target= "_blank"><i class="fab fa-facebook-square"></i></a>
                        <a class="links" href="https://twitter.com/kchonline?ref_src=twsrc%5Egoogle%7Ctwcamp%5Eserp%7Ctwgr%5Eauthor" target= "_blank"><i class="fab fa-twitter-square"></i></a>
                        <a class="links" href="https://www.youtube.com/user/knowledgechannelorg" target= "_blank"><i class="fab fa-youtube-square"></i></a>
                        <a class="links" href="https://www.instagram.com/knowledge_channel/?hl=en" target= "_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection