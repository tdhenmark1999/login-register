@extends('system._layouts.auth')

@section('content')

<div class="home-btn d-none d-sm-block">
    <a href="{{route('frontend.home.index')}}" class="text-dark"><i class="fas fa-home h2 text-white"></i></a>
</div>
<div class="account-pages my-5 pt-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10 col-xl-10">
                <div class="card overflow-hidden">
                    <div class="bg-soft-primary">
                        <div class="row">
                            <div class="col-7">
                                <div class="text-primary p-4">
                                    <h5 class="text-primary">Free Register</h5>
                                    <p>Sign up to continue to user panel.</p>
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
                        <form action="" method="POST" enctype="multipart/form-data"> 
                        {{ csrf_field() }}
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                         <div class="form-group {{$errors->first('first_name') ? 'has-error' : NULL}}">
                                            <label>First Name</label>
                                            <input type="text" class="form-control" name="first_name" value="{{old('first_name')}}">
                                            @if($errors->first('first_name'))
                                            <span class="help-block">{{$errors->first('first_name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group {{$errors->first('middle_name') ? 'has-error' : NULL}}">
                                            <label>Middle Name</label>
                                            <input type="text" class="form-control" name="middle_name" value="{{old('middle_name')}}">
                                            @if($errors->first('middle_name'))
                                            <span class="help-block">{{$errors->first('middle_name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                         <div class="form-group {{$errors->first('last_name') ? 'has-error' : NULL}}">
                                            <label>Last Name</label>
                                            <input type="text" class="form-control" name="last_name" value="{{old('last_name')}}">
                                            @if($errors->first('last_name'))
                                            <span class="help-block">{{$errors->first('last_name')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                   
                                    
                                    <div class="col-md-6">
                                        <div class="{{$errors->first('username') ? 'has-error' : NULL}}">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" value="{{old('username')}}">
                                            @if($errors->first('username'))
                                            <span class="help-block">{{$errors->first('username')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="{{$errors->first('password') ? 'has-error' : NULL}}">
                                            <label>New Password</label>
                                            <input type="password" class="form-control" name="password" value="{{old('password')}}">
                                            @if($errors->first('password'))
                                            <span class="help-block">{{$errors->first('password')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                     <div class="col-md-6">
                                        <div class="{{$errors->first('password_confirmation') ? 'has-error' : NULL}}">
                                            <label>Confirm Password</label>
                                            <input type="password" class="form-control" name="password_confirmation" value="{{old('password_confirmation')}}">
                                            @if($errors->first('password_confirmation'))
                                            <span class="help-block">{{$errors->first('password_confirmation')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
            
                                    <hr>
                                    <div class="col-md-12 mt-2 text-right">
                                        <button type="submit" class="text-right btn bg-primary text-white">Register</button>
                                         <div class="d-sm-block text-center pt-3 d-md-none">
                                            <a href="{{route('frontend.home.index')}}" class="font-weight-medium text-primary">Go back to Homepage</a>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                            <div class="mt-5 text-center">
                                                <p>Already have an account ? <a href="{{route('system.login')}}" class="font-weight-medium text-primary"> Sign in now </a> </p>
                                                <p> <script>document.write(new Date().getFullYear())</script> © All rights reserved</p>
                                            </div>
                                    </div>
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

@section('page-scripts')
<script type="text/javascript">
       function disable(select_val,input_id) {
                var e = document.getElementById(select_val);
                var strUser = e.options[e.selectedIndex].value;
                if(strUser === "faculty"){
                    document.getElementById(input_id).disabled = false;
              
                }
                else{
                    document.getElementById(input_id).value = document.getElementById(input_id).defaultValue;
                    document.getElementById(input_id).disabled = true;
                }
}
</script>
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