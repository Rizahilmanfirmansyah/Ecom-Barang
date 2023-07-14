@extends('layouts.Style-Login')
@section('content')

<style>
    .form-group{
        margin-top: 12px;
    }
</style>

<div class="container">
    <div class="d-flex justify-content-center">
        <div class="card" style="width: 35rem;">
            <div class="card-body">
                <form action="{{ route('aksireg')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">Name Seller</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Role</label>
                        <select name="role" id="" class="form-control">
                            <option value="seller">Penjual</option>
                        </select>
                    </div>
                    <div style="margin-top: 12px;">
                        <button type="submit" class="btn btn-secondary">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection