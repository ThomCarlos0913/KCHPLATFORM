@extends('layouts.boilerplate')

@section('content')
<div class="login_container">
  <img class="kch_logo" src="/assets/kch-icon.png" alt="Knowledge Channel">
  <form method="POST" action="{{ route('employee.login.submit') }}" class="loginform_container">
    @csrf
    <div class="login_user_input">
      <input class="login_input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus type="text" placeholder="E-mail Address" >
    </div>
    <div class="login_pw_input">
      <input class="login_pw @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" type="password" placeholder="Password">
    </div>
    <div class="login_options d-flex justify-content-between align-items-center">
      <span>
        <input class="chckbx" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
      </span>
      @if (Route::has('password.request'))
        <a class="forgot_password" href="{{ route('password.request') }}">
            {{ __('Forgot Your Password?') }}
        </a>
      @endif
    </div>
    <button type="submit" class="submit_button button">
      {{ __('Login') }}
    </button>
  </form>
  <a class="help" href="#">Help</a>
  <a class="termofuse" href="#">Term of Use</a>
  <a class="contacts" href="#">Contacts</a>
  <p class="copyright">Copyright © 2020</p>
</div>
@endsection