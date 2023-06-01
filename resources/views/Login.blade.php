@extends('layouts.Style-Login')
@section('content')

<div class="container">
    <div class="d-flex justyfi-content-center">
        <div class="card" style="width: 55rem;">
            <div class="card-body">
                <form action="{{ route('aksilogin')}}" method="post">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="password" name="password" class="form-control" id="">
                    </div>
                    <br>
                    <button type="submit" class="btn">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
    
@endsection