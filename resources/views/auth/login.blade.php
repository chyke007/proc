@extends('layouts.homestuffs')


@section('content')

 <div class="login-card"><img src="assets/img/avatar_2x.png" class="profile-img-card">
        <p class="profile-name-card"> </p>
        <form method="POST" action="{{ route('login') }}"class="form-signin"><span class="reauth-email"> </span>
              {{ csrf_field() }}
            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            
                            
                                <input id="email" type="email" class="form-control" placeholder="Email address" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            
                        </div>

           
            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                           
                                <input id="password" type="password" placeholder="Password"class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            
                        </div>


            <div class="form-group">
                               <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            
                        </div>

            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit">Sign in</button>
        </form><a class="btn btn-link" style="color:rgb(104, 145, 162);text-decoration: none;" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a></div>
                               
@endsection
