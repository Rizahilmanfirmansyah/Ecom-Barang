@extends('layouts.Style-Login')
@section('content')

<style>
    .preloader {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: 9999;
      background-color: #fff;
      animation-delay: 100s;
    }
    .preloader .loading {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%,-50%);
      font: 14px arial;
      animation-duration: 4s ;
    }
   body { 
      background: url({{asset('folder_image/bgkantinhealty.jpg')}}) no-repeat center center fixed; 
      /* webkit-background-size: cover;
      moz-background-size: cover;
      o-background-size: cover; */
      background-size: cover;
    }

    .panel-default {
      opacity: 0.9;
      margin-top:180px;
      background-size: ;
    }
    .field-icon {
    float: right;
    margin-left: -30px;
    margin-right: 10px;
    margin-top: -25px;
    position: relative;
    z-index: 2;
    }
</style>

<div class="row" style="margin-top: 15rem;">
    <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">
        <div class=" main-content-area">
            <div class="wrap-login-item ">						
                <div class="login-form form-item form-stl">
                    <form name="frm-login" action="{{ route('aksilogin')}}" method="post">
                        @csrf
                        <fieldset class="wrap-title">
                            <h3 class="form-title">Log in to your account</h3>										
                        </fieldset>
                        <fieldset class="wrap-input">
                            <label for="frm-login-uname">Email Address:</label>
                            <input type="text" id="frm-login-uname" name="email" placeholder="Type your email address">
                        </fieldset>
                        <fieldset class="wrap-input">
                            <label for="frm-login-pass">Password:</label>
                            <input type="password" id="frm-login-pass" name="password" placeholder="************">
                        </fieldset>
                        
                        <fieldset class="wrap-input">
                            <label class="remember-field">
                                <input class="frm-input " name="rememberme" id="rememberme" value="forever" type="checkbox"><span>Remember me</span>
                            </label>
                            <a class="link-function left-position" href="#" title="Forgotten password?">Forgotten password?</a>
                        </fieldset>
                        <input type="submit" class="btn btn-submit" value="Login" name="submit">
                    </form>
                </div>												
            </div>
        </div><!--end main products area-->		
    </div>
</div><!--end row-->
    
@endsection


