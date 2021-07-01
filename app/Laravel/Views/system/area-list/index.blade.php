@extends('system._layouts.main') 
@section('content')
  <!-- Begin page -->
<div id="layout-wrapper">

    @include('system._components.header')

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
<div class="main-content">

    
          
                    <div class="row" style="margin-top:150px">
                        <div class="col-md-12 text-center align-self-center pt-5 pb-5">
                        <h1 style="line-height: 60px;letter-spacing: 3px">WELCOME TO MY SYSTEM!!!</h1>
                        
                        </div>
                    </div>
            
        
            <!-- container-fluid -->
        
        <!-- End Page-content -->

    

        @include('system._components.footer')
    </div>
        
    <!-- end main content-->


<!-- END layout-wrapper -->
<div class="rightbar-overlay"></div>
@stop

