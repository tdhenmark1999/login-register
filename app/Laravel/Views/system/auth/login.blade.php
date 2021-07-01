@extends('system._layouts.auth')

@section('content')

<div class="home-btn d-none d-sm-block">
    <a href="{{route('frontend.home.index')}}" class="text-dark"><i class="fas fa-home h2 text-white"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-5">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Welcome Back !</h5>
                                    <p>Sign in to continue to user panel.</p>
                                </div>
                            </div>
                            <div class="col-5 align-self-end">
                                <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="card-body pt-0"> 
                        <div>
                            <a href="index.html">
                                <div class="avatar-md profile-user-wid mb-4">
                                    <span class="avatar-title rounded-circle bg-light">
                                        <img src="" alt="" class="rounded-circle" height="54">
                                    </span>
                                </div>
                            </a>
                        </div>
                        <div class="p-2">
                            <form action="" method="POST">
                              {!!csrf_field()!!}
                               @include('system._components.notifications')
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input required="" name="username" type="text" class="form-control" id="username" placeholder="Enter username" value="{{old('username')}}">
                                </div>
        
                                <div class="form-group">
                                    <label for="userpassword">Password</label>
                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                </div>
        
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customControlInline">
                                    <label class="custom-control-label" for="customControlInline">Remember me</label>
                                </div>
                                
                                <div class="mt-3">
                                    <button  class="btn btn-primary btn-block waves-effect waves-light" type="submit">Log In</button>
                                </div>
                                <div class="d-sm-block text-center pt-3 d-md-none">
                                            <a href="{{route('frontend.home.index')}}" class="font-weight-medium text-primary">Go back to Homepage</a>
                                        </div>
                                <div class="mt-4 text-center">

                                    <div class="text-center">
                                        <p>Don't have an account ? <a href="{{route('system.register')}}" class="font-weight-medium text-primary"> Sign up now </a> </p>
                                        
                                        <p> <script>document.write(new Date().getFullYear())</script> © . All rights reserved</p>
                                    </div>
                                </div>
                            </form>
                        </div>
    
                    </div>
                </div>
               

            </div>
        </div>
    </div>
</div>
@stop

@section('page-styles')
<style type="text/css">
    body {
        background-image: url('{{asset('assets/bg3.jpg')}}');
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
@stop