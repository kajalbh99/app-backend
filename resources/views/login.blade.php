@extends('layouts.login_layout')
@section('style')
@stop
@section('content')
    {{ Form::open(['route' => ['login'],'class'=>'login-form']) }}
        <h3 class="form-title font-green">Sign In</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Enter any username and password. </span>
        </div>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            {{ Form::email('email','',['placeholder'=>'Username','class'=>'form-control form-control-solid placeholder-no-fix']) }}
            </div>
            
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            {{ Form::password('password', ['placeholder'=>'password','class' => 'form-control form-control-solid placeholder-no-fix']) }} </div>
        <div class="form-actions">
            <button type="submit" class="btn green uppercase">Login</button>
            <label class="rememberme check mt-checkbox mt-checkbox-outline">
                <input type="checkbox" name="remember" value="1" />Remember
                <span></span>
            </label>
            <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
        </div>
        <div class="login-options">
            <h4>Or login with</h4>
            <ul class="social-icons">
                <li>
                    <a class="social-icon-color facebook" data-original-title="facebook" href="javascript:;"></a>
                </li>
                <li>
                    <a class="social-icon-color twitter" data-original-title="Twitter" href="javascript:;"></a>
                </li>
                <li>
                    <a class="social-icon-color googleplus" data-original-title="Goole Plus" href="javascript:;"></a>
                </li>
                <li>
                    <a class="social-icon-color linkedin" data-original-title="Linkedin" href="javascript:;"></a>
                </li>
            </ul>
        </div>
        <div class="create-account">
            <p>
                <a href="register" id="register-btn" class="uppercase">Create an account</a>
            </p>
        </div>
        {{ Form::close() }}
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    {{ Form::open(['route' => ['forget'],'class'=>'forget-form']) }}
        <h3 class="font-green">Forget Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email" name="email" /> </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
            <button type="submit" class="btn btn-success uppercase pull-right">Submit</button>
        </div>
    {{ Form::close() }}
    <!-- END FORGOT PASSWORD FORM -->
@stop
@section('script')

@stop
        