@extends('layouts.Style-Login')
@section('content')
<style>
    .form-group{
        margin-top: 12px;
    }
</style>

<div class="container">
    <div class="row" style="margin-top: 12rem;">
        <div class="col-lg-6 col-sm-6 col-md-6 col-xs-12 col-md-offset-3">							
            <div class=" main-content-area">
                <div class="wrap-login-item " >
                    <div class="register-form form-item ">
                    <form class="form-stl" action="{{ route('aksireg')}}" name="frm-login" method="post" style="width: 50rem;" >
                    @csrf
                    <fieldset class="wrap-title">
                        <h3 class="form-title">Create an account</h3>
                        <h4 class="form-subtitle">Personal infomation</h4>
                    </fieldset>
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="user">Pembeli</option>
                        </select>
                    </div>
                    <div style="margin-top: 12px;">
                        <button type="submit" class="btn btn-secondary">Register</button>
                    </div>      
                    </form>
                    </div>											
                </div>
            </div><!--end main products area-->		
        </div>
    </div><!--end row-->
</div>


{{-- <div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <form action="{{ route('aksireg')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Address</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="user">Pembeli</option>
                        </select>
                    </div>
                    <div style="margin-top: 12px;">
                        <button type="submit" class="btn btn-secondary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> --}}
    
@endsection